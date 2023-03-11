<?php

class
Connect {

	public function __construct()
	{
		$this->createNewDatabase();
	}

	public function createNewDatabase(): void
    {
		try {
			$connect = new PDO("mysql:host=localhost", "root", "");
			$databases = $connect->query('show databases')->fetchAll(PDO::FETCH_COLUMN);

			if(!in_array('my-storage',$databases)) {
				$connect->exec("
					CREATE DATABASE `my-storage`;
					use `my-storage`;
					CREATE TABLE `users` (id integer auto_increment primary key, login varchar(30), email varchar(100), password varchar(255), full_name varchar(100));
				");
				echo 'База данных my-storage успешно создана!';
			}
		}
		catch(PDOException $e) {
			echo "Неудачная попытка подключения к базе данных: " . $e->getMessage();
		}
	}
}