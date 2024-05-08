<?php

class Test
{
    use Controller;
    
    public function index()
    {
        $user = new User();
        show($user->findAll());
        $this->view("test");
    }
}
