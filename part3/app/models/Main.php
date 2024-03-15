<?php

class Main
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getarticles()
    {
        $this->db->dbquery("SELECT * FROM brand");
        return $this->db->getmultidata(); // Return the fetched data
    }
}

?>