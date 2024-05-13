<?php

require_once "Pagination.php";
require_once "config.php";
require_once "Database.php";
require_once "Model.php";
require_once "Validator.php";
require_once "../models/City.php";
require_once "../controllers/AddCity.php";
require_once "../controllers/EditCity.php";

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

if (isset($data['action']) && $data['action'] == 'get_city') {
    $id = isset($data['id']) ? (int) $data['id'] : 0;
    $city = new City();
    $result = $city->first(["id" => $id]);
    if ($result) {
        $res = ['answer' => 'success', 'city' => $result];
    } else {
        $res = ['answer' => 'error',];
    }
    echo json_encode($res);
    die;
}