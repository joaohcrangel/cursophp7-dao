<?php 

require_once("config.php");

$root = new Usuario();

$root->loadbyId(3);

echo $root;

 ?>