<?php
namespace App\Controllers;
class Error404 {
    public function display(\PDO $conn = null) {
        \Helpers\Viewer::getView('404');
    }
}