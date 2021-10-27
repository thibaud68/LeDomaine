<?php
$user = 'root';
$pass = '';

$bdd = new PDO('mysql:host=localhost;dbname=le_domaine', $user, $pass);
$bdd->exec("SET NAMES 'UTF8'");
?>