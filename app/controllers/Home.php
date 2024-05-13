<?php

class Home
{
    use Controller;

    public function index()
    {
        $data["username"] = empty($_SESSION["USER"]) ? "User" : $_SESSION["USER"]->email;
        if (isset($_SESSION["USER"])) {
            $data["user"] = "user";
        } 
        if (isset($_SESSION["USER"]) && $_SESSION["USER"]->email === ADMIN) {
            $data["user"] = "admin";
        }

        $this->view("home", $data);
    }
}
