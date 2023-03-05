<?php
session_start();

require __DIR__ . '/../../vendor/autoload.php';

if ($_POST['login'] !== '') {
	if ($_POST['password'] === $_POST['password_confirm']) {
		$user = new User();
		$folderName = "folders_" . $_POST['login'];
		$user->createNewUserDisk($folderName);
		$user->addNewUserToDatabase($_POST['login'], $_POST['email'], md5($_POST['password']), $_POST['full_name']);
		$_SESSION['success_register'] = 'Вы успешно зарегистрировались. Теперь можно авторизоваться';
		header('Location: ../index.php');
	} else {
		$_SESSION['password_not_match'] = 'Пароли не совпадают. Вы не зарегистрировались.';
		header('Location: ../views/register.php');
	}
} else {
	$_SESSION['password_not_match'] = 'Имя не заполнено';
	header('Location: ../views/register.php');
}

