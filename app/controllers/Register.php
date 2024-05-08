<?php

class Register
{
    use Controller;
    
    public function index()
    {
        $this->view("register");
    }
}
