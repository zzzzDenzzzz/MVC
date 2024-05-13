<?php

require_once "../core/Action.php";

if (isset($_POST['editCity'])) {
    $data = $_POST;
    $validator = new Validator();
    $validation = $validator->validate($data, [
        'name' => [
            'required' => true,
        ],
        'population' => [
            'minNum' => 1,
        ],
        'id' => [
            'minNum' => 1,
        ],
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
        $city->update($data["id"], ["name" => $data["name"], "population" => $data["population"]]);
        $res = ["answer" => "success"];
    }
    echo json_encode($res);
    die;
}