<?php
namespace App\Controllers;
class Home {
    public function display(\PDO $conn = null) {
        \Helpers\Viewer::getView('home');
    }
}