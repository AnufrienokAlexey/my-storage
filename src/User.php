<?php

class User {

	public function selectUserFromDatabase($login, $password): false|array
    {
		$arr = [];
		try {
			$connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
			$users = $connect->prepare("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
			$users->execute();
			$arr = $users->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $e) {
			echo "Неудачная попытка подключения к базе данных: " . $e->getMessage();
		}
		return $arr;
	}

	public function addNewUserToDatabase($login, $email, $password, $fullName): void
    {
		try {
			$connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
			$users = $connect->prepare("INSERT INTO `users`(`id`, `login`, `email`, `password`, `full_name`) VALUES (null,'$login','$email','$password','$fullName')");
			$users->execute();
		}
		catch(PDOException $e) {
			echo "Неудачная попытка подключения к базе данных: " . $e->getMessage();
		}
	}

	public function createNewUserDisk($folderName): void
    {
		try{
			$connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
			$databases = $connect->query('show tables')->fetchAll(PDO::FETCH_COLUMN);

			if(!in_array($folderName, $databases)) {
				$connect->exec("CREATE TABLE `$folderName` (id integer auto_increment primary key, folder_name varchar(30), file_path varchar(100))");
			}
		}
		catch(PDOException $e) {
			echo "Неудачная попытка подключения к базе данных: " . $e->getMessage();
		}
	}
}