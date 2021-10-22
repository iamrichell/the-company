<?php
    class Database{
        private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $database = "the_company";
        public $conn;

        public function __construct(){
            // $conn = new mysqli($servername, $username, $password, $database);

            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

            if($this->conn->error){
                die("Unable to connect to database " .$this->database. ": " .$this->conn->connect_error);
            }
        }
    }

?>