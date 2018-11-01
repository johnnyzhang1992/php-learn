<?php


class ConnDB{
    var $conn;
    function GetConn(){
        // connect database
        $servername = "mars.cs.qc.cuny.edu";
        $username = "shui5560";
        $password = "14065560";
        $dbname = "shyi5560";

        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}