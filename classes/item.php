<?php

    require "database.php";

    class Item extends Database{
        public function getAllItems(){
            $sql = "SELECT * FROM items";

            if($result = $this->conn->query($sql)){
                $rows = array();
                while($row = $result->fetch_assoc()){
                   $rows[] = $row;
                }

                return $rows;
            } else {
                die("Error retrieving all users: " . $this->conn->error);
            }
        }

        public function getItem($item_id){
            $sql = "SELECT * FROM items WHERE item_id = $item_id";
    
            if($result = $this->conn->query($sql)){
                // expecting one row only
                return $result->fetch_assoc();
            } else {
                die("Error retrieving user: " . $this->conn->error);
            }
        }
    }
?>