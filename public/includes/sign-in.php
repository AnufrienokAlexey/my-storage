<?php

require __DIR__ . '/../../vendor/autoload.php';

if (($_POST['login'] !== null) AND ($_POST['password']) !== null) {
	$user = new User();
	$user->selectUserFromDatabase($_POST['login'], $_POST['password']);
}
