<?php
    class dbobj
    {
        var $servername = "localhost";
        var $username = "root";
        var $pass = "";
        var $dbname = "db_employee";
        var $conn;

        function getConnstring()
        {
            $con = mysqli_connect($this->servername, $this->username, $this->pass, $this->dbname) or die ("Connection Failed: " . mysqli_connect_error());
            if (mysqli_connect_error()) {
                printf("Connect Failed : %s\n", mysqli_connect_error());
                exit();
            } else {
                $this->conn = $con;
            }
            return $this->conn;
        }
    }
?>