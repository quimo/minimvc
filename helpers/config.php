<?php
namespace Helpers;
class Config {
    private static $baseUrl = '/minimvc/public_html/';
    public static function init() {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        session_start();
    }
    public static function getBaseUrl() {
        return self::$baseUrl;
    }
    public static function get() {
        return include_once __DIR__ . '/../config/config.php';
    }
}