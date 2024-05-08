<?php

class Test
{
    use Controller;
    
    public function index()
    {
        $user = new User();
        $user->insert(["name" => "John", "age" => 63]);
        show($user->findAll());
        $this->view("test");
    }
}
