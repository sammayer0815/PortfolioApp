<?php

class Connection
{
    public $hostname, $dbname, $username, $password, $conn;

    function __construct() {
        $this->hostname = "localhost";
        $this->dbname = "profileApp";
        $this->username = "root";
        $this->password = "";
        try {
            $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute( PDO::ERRMODE_EXCEPTION, PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        return $this->conn;
    }
}

?>