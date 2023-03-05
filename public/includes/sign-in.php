<?php
session_start();

require __DIR__ . '/../../vendor/autoload.php';

if (($_POST['login'] !== null) AND ($_POST['password']) !== null) {
	$user = new User();
	$_SESSION['user'] = $user->selectUserFromDatabase($_POST['login'], $_POST['password']);
	header('Location: ../views/lk.php');
}
