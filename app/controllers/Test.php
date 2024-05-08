<?php

class Test
{
    use Controller;
    
    public function index()
    {
        $user = new User();
        show($user->findAll());
        // $arr = [
        //     "name" => "John",
        //     "age" => 60
        // ];
        $arr['name'] = "John";
        $arr['age'] = 60;
        // $result = $user->insert($arr);
        show($user->where(["id" => 2]));
        $this->view("test");
    }
}
