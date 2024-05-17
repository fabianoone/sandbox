<?php

namespace classes;

require_once '../config/db.php';

class ConnectionClass
{

    public function __construct()
    {
        // db connection
        $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}