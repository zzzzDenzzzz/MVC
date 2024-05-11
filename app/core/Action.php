<?php

require_once "Pagination.php";
require_once "config.php";
require_once "Database.php";
require_once "Model.php";
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
