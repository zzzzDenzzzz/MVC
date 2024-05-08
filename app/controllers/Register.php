<?php

class Register
{
    use Controller;

    public function index()
    {
        $user = new User();

        if ($user->validate($_POST)) {
            redirect("home");
        }

        $data['errors'] = $user->errors;
        $this->view("register", $data);
    }
}
