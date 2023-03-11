<?php

class Folder {

	public function selectAllFolders($login)
	{
		try {
			$connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
            $login = '`folders_' . $login . '`';
			$folders = $connect->prepare("SELECT * FROM $login");
			$folders->execute();
			return $folders->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $e)
		{
			echo "Неудачная попытка подключения к базе данных: " . $e->getMessage();
		}
	}

    public function addNewFolder($login, $folderName)
    {
        $connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
        $login = '`folders_' . $login . '`';
        $newFolder = $connect->prepare("INSERT INTO $login(`id`, `folder_name`) VALUES (null, '$folderName')");
        $newFolder->execute();
        return $newFolder;
    }

    public function deleteFolder($login, $id)
    {
        $connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
        $login = '`folders_' . $login . '`';
        $newFolder = $connect->prepare("DELETE FROM $login WHERE `id` = $id");
        $newFolder->execute();
    }
}