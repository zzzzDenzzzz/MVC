<?php

class Admin
{
    use Controller;

    public function index()
    {
        if (!isset($_SESSION["USER"])) {
            redirect("404");
        }

        if ($_SESSION["USER"]->email == "12den24@gmail.com") {
            $user = new User();

            show($user->findAll());
            $this->view("admin");
        } else {
            redirect("userPage");
        }
    }
}
