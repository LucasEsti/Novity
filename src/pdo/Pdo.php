<?php
namespace novity\src\pdo;

abstract class Pdo {
    private $servername;
    private $username;
    private $password;
    protected $dbname;
    protected $conn;

    protected function __construct() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";

        $this->con = new mysqli($servername, $username, $password, $dbname);
        var_dump($this);
        if ($this->con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

    }

    abstract public function save() : string;

    protected function close() {
        $this->conn->close();
    }
}






?>