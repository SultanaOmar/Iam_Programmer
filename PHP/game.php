<?php
session_start();
if(!isset($_SESSION['user'])){
	header('Location: login.php');
	exit();
}

$levels = array(1, 2, 3);

if(in_array(@$_GET['l'], $levels) && in_array(@$_GET['g'], $levels)){
	@include "games\game_".$_GET['l']."_".$_GET['g'].'.inc';
} else {
	header('Location: dashboard.php');
}
