<?php

class Admin
{
    use Controller;

    public function index()
    {
        if (!isset($_SESSION["USER"])) {
            redirect("404");
        }

        if ($_SESSION["USER"]->email == ADMIN) {
            $user = new User();

            show($user->findAll());
            $this->view("admin");
        } else {
            redirect("userPage");
        }
    }
}
