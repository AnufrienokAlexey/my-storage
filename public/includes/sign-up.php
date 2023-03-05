<?php
require 'connect.php';
session_start();

if ($_POST['password'] === $_POST['password_confirm']) {
	$_SESSION['success_register'] = 'Вы успешно зарегистрировались. Теперь можно авторизоваться';
	header('Location: ../index.php');
} else {
	$_SESSION['password_not_match'] = 'Пароли не совпадают. Вы не зарегистрировались.';
	header('Location: ../register.php');
}
