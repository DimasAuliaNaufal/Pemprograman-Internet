<?php
    class Connection
    {
        public $conn;
        public function get_connection()
        {
            $host = "localhost";
            $database = "toko_peralatan_basket";
            $username = "root";
            $password = "";
            $connect = new mysqli($host, $username, $password, $database); 
            return $connect;
        }
    }