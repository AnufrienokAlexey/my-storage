<?php

class Folder {

	public function selectAllFolders()
	{
		try {
			$connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
			$folders = $connect->prepare("SELECT * FROM `folders`");
			$folders->execute();
			return $folders->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $e)
		{
			echo "Неудачная попытка подключения к базе данных: " . $e->getMessage();
		}
	}
}