<?php
declare(strict_types=1);
// var_dump($_SERVER['PATH_INFO'], $_SERVER['REQUEST_METHOD']);
// // exit();

if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/') {
    require_once 'listagem.php';
} 
// ?>