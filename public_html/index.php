<?php
// setup
require_once __DIR__ . '/../helpers/config.php'; 
require_once __DIR__ . '/../helpers/router.php';
require_once __DIR__ . '/../helpers/viewer.php';
require_once __DIR__ . '/../helpers/connection.php';
// controllers
require_once __DIR__ . '/../app/controllers/frontController.php';
require_once __DIR__ . '/../app/controllers/home.php';
require_once __DIR__ . '/../app/controllers/404.php';
// models
require_once __DIR__ . '/../app/models/post.php';

\Helpers\Config::init();
$config = \Helpers\Config::get();
$conn = \Helpers\Connection::get($config);
\Helpers\Router::getController($conn);
?>