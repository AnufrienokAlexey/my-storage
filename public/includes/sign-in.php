<?php
session_start();

require __DIR__ . '/../../vendor/autoload.php';

var_dump($_POST);

if (($_POST['login'] !== null) AND ($_POST['password']) !== null) {
	echo 'sign-in';
	$user = new User();
	$_SESSION['user'] = $user->selectUserFromDatabase($_POST['login'], $_POST['password']);
	var_dump($_SESSION['user']);
//	header('Location: ../views/lk.php');
}
