<?php

Class Database {
    private $host = 'exampel';
    private $user = 'exampel';
    private $pass = 'exampel';
    private $db_name = 'exampel';


    public function connect() {
        try {
            $conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    }
}