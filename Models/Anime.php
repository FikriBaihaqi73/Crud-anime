<?php

class Anime {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllAnime() {
        $query = "SELECT * FROM anime";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAnime($id) {
        $query = "SELECT * FROM anime WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createAnime($data) {
        $query = "INSERT INTO anime(nama, tahun, studio, mangaka, genre) VALUES (:nama, :tahun, :studio, :mangaka, :genre)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':tahun', $data['tahun']);
        $stmt->bindParam(':studio', $data['studio']);
        $stmt->bindParam(':mangaka', $data['mangaka']);
        $stmt->bindParam(':genre', $data['genre']);
        return$stmt->execute();
    }

    public function updateAnime($id, $data) {
        $query = "UPDATE anime SET nama = :nama, tahun = :tahun, studio = :studio, mangaka = :mangaka, genre = :genre WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':tahun', $data['tahun']);
        $stmt->bindParam(':studio', $data['studio']);
        $stmt->bindParam(':mangaka', $data['mangaka']);
        $stmt->bindParam(':genre', $data['genre']);
        return $stmt->execute();
    }

    public function deleteAnime($id) {
        $query = "DELETE FROM anime WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function searchAnime($keyword) {
        $query = "SELECT * FROM anime 
                    WHERE 
                    nama LIKE :keyword OR
                    tahun LIKE :keyword OR
                    studio LIKE :keyword OR
                    mangaka LIKE :keyword OR
                    genre LIKE :keyword"; 
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':keyword', "%$keyword%");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}