<?php
include_once("class/class.includes.php");


$map = new Map();
$map->loadfromfile();
$lst = array();
foreach($map->map as $row) {	
	
	array_push($lst, $row);
}
foreach($lst as $row) {
	print_r($row);
}

$player = new Player("Dss285",30000,[],["none"],[]);
$player->toString();
?>