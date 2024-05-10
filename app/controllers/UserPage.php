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
        $this->view("userPage", $data);
    }
}
