<?php
// setup
require_once __DIR__ . '/../helpers/config.php'; 
require_once __DIR__ . '/../helpers/router.php';
require_once __DIR__ . '/../helpers/viewer.php';
// controllers
require_once __DIR__ . '/../app/controllers/frontController.php';
require_once __DIR__ . '/../app/controllers/home.php';
require_once __DIR__ . '/../app/controllers/404.php';
\Helpers\Config::init();
\Helpers\Router::getController();
?>