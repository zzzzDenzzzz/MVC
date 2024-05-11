<?php

class City
{
    use Model;

    protected $table = "city";

    protected $allowedColumns = [
        "name",
        "population",
    ];

    public function getCount()
    {
        $query = "SELECT COUNT(*) FROM $this->table";

        return $this->query($query)[0]->{'COUNT(*)'};
    }

    public function getCities($start, $per_page)
    {
        $query = "SELECT * FROM $this->table LIMIT $start, $per_page";

        return $this->query($query);
    }
}