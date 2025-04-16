<?php

require_once __DIR__ . '/../Config/Database.php';
require_once __DIR__ . '/../Models/Anime.php';
require_once __DIR__ . '/../Controllers/AnimeController.php';

$database = new Database();
$db = $database->connect();
$controller = new AnimeController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}