<?php

class Formulaire {
    private $servername;
    private $username;
    private $password;
    protected $dbname;
    protected $conn;

    function __construct() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "novityEmail";

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function save($email, $subject, $message) {
        $sql = "INSERT INTO mail (email, subject, message)
                    VALUES ('". $email ."', '". $subject ."', '". $message ."')";
        $return = "";
        if ($this->conn->query($sql) === TRUE) {
            $return = "New record created successfully";
        } else {
            $return = "Error: " . $sql . "<br>" .$this->conn->error;
        }

        $this->conn->close();

        return $return;
    }

}

?>