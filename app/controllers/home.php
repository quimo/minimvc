<?php
namespace App\Controllers;
class Home {
    public function display() {
        \Helpers\Viewer::getView('home');
    }
}