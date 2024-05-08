<?php

class Test
{
    use Controller;
    
    public function index()
    {
        $user = new User();
        $user->insert(["name" => "Олег", "age" => 29]);
        show($user->findAll());
        $this->view("test");
    }
}
