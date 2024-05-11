<?php

class Test
{
    use Controller;

    public function index()
    {
        $role = new Role();
        $email = $role->getEmail(ADMIN);
        show($email);
        show($_SESSION["USER"]->email);
        $this->view("test");
    }
}