<?php

class Test
{
    use Controller;

    public function index()
    {
        $city = new City();
        $total_city = $city->getCount();
        $page = $_GET['page'] ?? 1;
        $pagination = new Pagination($page, PER_PAGE, $total_city);
        $start = $pagination->get_start();
        $cities = $city->getCities($start, PER_PAGE);
        $data = ['cities' => $cities, 'pagination' => $pagination];

        $this->view("test", $data);
    }
}