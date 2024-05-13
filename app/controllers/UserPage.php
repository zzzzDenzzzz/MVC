<?php

class UserPage
{
    use Controller;

    public function index()
    {
        if (!isset($_SESSION["USER"])) {
            redirect("404");
        }

        $data["username"] = empty($_SESSION["USER"]) ? "User" : $_SESSION["USER"]->email;
        $city = new City();
        $total_city = $city->getCount();
        $page = $_GET['page'] ?? 1;
        $pagination = new Pagination((int) $page, PER_PAGE, $total_city);
        $start = $pagination->get_start();
        $cities = $city->getCities($start, PER_PAGE);
        $data += ['cities' => $cities, 'pagination' => $pagination];

        if (isset($data['search'])) {
            $search = trim($data['search']);
            // $city = new City();
            $search_cities = $city->searchCities($search);
            $data += ["search_cities" => $search_cities];
            require_once "../views/search.view.php";
            die;
        }

        $this->view("userPage", $data);
    }
}
