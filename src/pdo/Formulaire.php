<?php

class Formulaire extends Pdo {
    function __construct() {
        $this->dbname = "novityEmail";
    }

    public function save() {
        $sql = "INSERT INTO mail (email, subject, message)
                    VALUES ('Lucas@yahoo.fr', 'Test Novity', 'ceci est un test')";
        $return = "";
        if ($conn->query($sql) === TRUE) {
            $return = "New record created successfully";
        } else {
            $return = "Error: " . $sql . "<br>" . $conn->error;
        }

        $this->close();

        return $return;
    }
}


?>