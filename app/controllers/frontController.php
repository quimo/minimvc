<?php
namespace App\Controllers;
class FrontController {
    public function display() {
        \Helpers\Viewer::getView('index');
    }
}