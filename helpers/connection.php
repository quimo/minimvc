<?php
namespace Helpers;
class Connection {
    public static function get($config) {
        return new \PDO("mysql:host={$config['db']['host']};dbname={$config['db']['database']};charset=utf8",  $config['db']['user'],  $config['db']['password'], $config['db']['pars']);
    }
}