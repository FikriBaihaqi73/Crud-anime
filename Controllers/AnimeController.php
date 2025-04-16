<?php

class AnimeController {
    private $model;

    public function __construct($database) {
        $this->model = new Anime($database);
    }

    public function index(){
        $animes = $this->model->getAllAnime();
        require_once '../Views/anime/index.php';
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nama' => $_POST['nama'],
                'tahun' => $_POST['tahun'],
                'studio' => $_POST['studio'],
                'mangaka' => $_POST['mangaka'],
                'genre' => $_POST['genre']
            ];

            if ($this->model->createAnime($data)) {
                header('Location: /tugasakhir1/Public/index.php?action=index');
                exit();
            }
        }
        require_once '../Views/anime/create.php';
    }

    public function edit($id){
        $anime = $this->model->getAnime($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nama' => $_POST['nama'],
                'tahun' => $_POST['tahun'],
                'studio' => $_POST['studio'],
                'mangaka' => $_POST['mangaka'],
                'genre' => $_POST['genre']
            ];

            if ($this->model->updateAnime($id, $data)) {
                header('Location: /tugasakhir1/Public/index.php?action=index');
                exit();
            }
        }
        require_once '../Views/anime/edit.php';
    }

    public function delete($id) {
        if ($this->model->deleteAnime($id)) {
            header('Location: /tugasakhir1/Public/index.php?action=index');
            exit();
        }
    }

}