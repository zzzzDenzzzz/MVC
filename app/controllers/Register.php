<?php

class Register
{
    use Controller;

    public function index()
    {
        if (isset($_SESSION["USER"])) {
            redirect("userPage");
        }

        $data = [];
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = new User();

            if ($user->validate($_POST)) {
                $user->insert($_POST);
                redirect("login");
            }

            $data['errors'] = $user->errors;
        }

        $this->view("register", $data);
    }
}
