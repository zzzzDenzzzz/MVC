<?php

class Role
{
    use Model;

    protected $table = "roles";

    protected $allowedColumns = [];

    public function getEmail($email)
    {
        $query = "SELECT users.email FROM $this->table JOIN users ON $this->table.user_id = users.id WHERE users.email = '$email'";

        $result = $this->query($query);
        if (!empty($result)) {
            $firstItem = $result[0];

            if (property_exists($firstItem, 'email')) {
                $email = $firstItem->email;
                return $email;
            }
        }

        return null;
    }
}