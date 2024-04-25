<?php

class createActivityDB
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;


    public function __construct($dbname = "lmsdb", $tablename = "activity", $servername = "localhost", $username = "root", $password = "") {
            $this->dbname = $dbname;
            $this->tablename = $tablename;
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;

            $this->con = mysqli_connect($servername, $username, $password);

            //Debug connection
            if(!$this->con) {
                die("Connection failed: ". mysqli_connect_error());
            }

            //Query
            $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

            //Query to Create Table
            if(mysqli_query($this->con, $sql)) {
                $this->con = mysqli_connect($servername, $username, $password, $dbname);

                
                $sql = "CREATE TABLE IF NOT EXISTS $tablename
                        (activity_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        activity_name VARCHAR(25) NOT NULL,
                        activity_instructions VARCHAR(100),
                        activity_deadline VARCHAR(25)
                        );";


                if(!mysqli_query($this->con, $sql)) {
                    echo "Error creating table: ". mysqli_error($this->con);
                }

            }else {
                return false;
            }

            //Query to Insert Value
            if(mysqli_query($this->con, $sql)) {
                $this->con = mysqli_connect($servername, $username, $password, $dbname);

                $sql = "INSERT INTO activity (id, activity_name, activity_instructions, activity_deadline) VALUES ('1', 'FA1.1:EX1', 'Create a program that will ask for an integer input and display its output.', '05-05-22');";

            }else {
                return false;
            }
            
    }

    public function getData() {
        $sql = "SELECT * FROM $this->tablename";
        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}
?>