<?php 
include('connexion.php');

$BDD = new connexion;
$result = array();
$querySelect = "SELECT * FROM test";

$result = $BDD->selectQuery($querySelect);

var_dump($result);

?>