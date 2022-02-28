<?php
namespace Helpers;
class Viewer {
    public static function getView($view) {
        require_once __DIR__ . '/../app/views/' . $view . '.tpl.php';
    }
}