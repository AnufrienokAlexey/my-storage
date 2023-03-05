<?php

class User {

	public function selectUserFromDatabase($login, $password)
	{
		try {
			$connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
			$users = $connect->prepare("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
			$users->execute();
			var_dump($users->fetchAll());
			echo 'goodddddd';
		}
		catch(PDOException $e)
		{
			echo "Неудачная попытка подключения к базе данных: " . $e->getMessage();
		}
	}
}