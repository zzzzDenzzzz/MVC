<?php

class AdminPage
{
    use Controller;

    public function index()
    {
        if (!isset($_SESSION["USER"])) {
            redirect("404");
        }

        $role = new Role();
        $admin_email = $role->getEmail(ADMIN);

        if ($_SESSION["USER"]->email == $admin_email) {
            $city = new City();
            $total_city = $city->getCount();
            $page = $_GET['page'] ?? 1;
            $pagination = new Pagination((int)$page, PER_PAGE, $total_city);
            $start = $pagination->get_start();
            $cities = $city->getCities($start, PER_PAGE);
            $data = ['cities' => $cities, 'pagination' => $pagination];

            $this->view("adminPage", $data);
        } else {
            redirect("userPage");
        }
    }
}
