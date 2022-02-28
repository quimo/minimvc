<?php
namespace App\Controllers;
class Error404 {
    public function display() {
        \Helpers\Viewer::getView('404');
    }
}