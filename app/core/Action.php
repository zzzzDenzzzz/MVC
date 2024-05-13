<?php

require_once "Pagination.php";
require_once "config.php";
require_once "Database.php";
require_once "Model.php";
require_once "Validator.php";
require_once "../models/City.php";

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data["page"])) {
    $page = $data["page"];
    $city = new City();
    $total_city = $city->getCount();
    $pagination = new Pagination((int) $page, PER_PAGE, $total_city);
    $start = $pagination->get_start();
    $cities = $city->getCities($start, PER_PAGE);
    $data = ['cities' => $cities, 'pagination' => $pagination];
    require_once "../views/adminPage-content.view.php";
    die;
}

// Add city
if (isset($_POST['addCity'])) {
    $data = $_POST;
    $validator = new Validator();
    $validation = $validator->validate($data, [
        'name' => [
            'required' => true,
        ],
        'population' => [
            'minNum' => 1,
        ]
    ]);
    if ($validation->hasErrors()) {
        $errors = '<ul class="list-unstyled text-start text-danger">';
        foreach ($validation->getErrors() as $v) {
            foreach ($v as $error) {
                $errors .= "<li>{$error}</li>";
            }
        }
        $errors .= '</ul>';
        $res = ['answer' => 'error', 'errors' => $errors];
    } else {
        $city = new City();
        $city->insert(["name" => $data["name"], "population" => $data["population"]]);
        $res = ["answer" => "success"];
        $res = ['answer' => 'success'];
    }
    echo json_encode($res);
    die;
}