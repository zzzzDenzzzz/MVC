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
            
            $admin = new Admin();
            show($admin->findAll());
            $this->view("adminPage");
        } else {
            redirect("userPage");
        }
    }
}
