<?php
namespace App\Controllers;
class FrontController {
    public function display(\PDO $conn = null) {
        \Helpers\Viewer::getView('index');
    }
}