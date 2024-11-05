<?php
require 'dados.php';

// echo '<pre>';
// var_dump($_SERVER);
// echo  '</pre>';

$controller = 'index';

if ($_SERVER['REQUEST_URI'] == '/bookwise/') {
  $controller = 'index';
} else {
  $controller = 'livro';
}


require "controllers/{$controller}.controller.php";
