<?php

class Admin
{
    use Controller;
    
    public function index()
    {
        if (!isset($_SESSION["USER"])) {
            redirect("404");
        }

        $user = new User();
        
        show($user->findAll());
        $this->view("admin");
    }
}
