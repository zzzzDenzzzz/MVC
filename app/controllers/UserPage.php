<?php

class UserPage
{
    use Controller;

    public function index()
    {
        $data["username"] = empty($_SESSION["USER"]) ? "User" : $_SESSION["USER"]->email;
        $this->view("userPage", $data);
    }
}
