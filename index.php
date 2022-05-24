<?php 

$controles = $_GET['controller'];
$actions = $_GET['action'];
$id = $_GET['id'];


if(empty($actions))
	$actions = "index";

$ctrlName = $controles."Controles";
include './controles/'.$ctrlName.'.php';
$ctrl = new $ctrlName;
$ctrl->{$actions}();

?>