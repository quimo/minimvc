<?php
namespace App\Controllers;
class FrontController {
    public function display(\PDO $conn = null) {
        $data =  \App\Models\Post::getAll($conn);
        \Helpers\Viewer::getView('index', $data);
    }
}