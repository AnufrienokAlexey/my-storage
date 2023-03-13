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
        $login = 'folders_' . $login;
        $filePath = 'uploads/' . $login . '/' . $folderName;
        $newFolder = $connect->prepare("INSERT INTO $login (`id`, `folder_name`, `file_path`) VALUES (null, '$folderName', '$filePath')");
        $newFolder->execute();
        return $newFolder;
    }

    public function selectCurrentFolder($login, $id)
    {
        $connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
        $login = 'folders_' . $login;
        $currentFolder = $connect->prepare("SELECT * FROM $login WHERE `id` = $id");
        $result = $currentFolder->execute();
//        var_dump($result);
        return $currentFolder->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteFolder($login, $id)
    {
        $connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");
        $login = '`folders_' . $login . '`';
        $newFolder = $connect->prepare("DELETE FROM $login WHERE `id` = $id");
        $newFolder->execute();
    }

    public function savePathFile()
    {
        $connect = new PDO("mysql:host=localhost;dbname=my-storage;charset=utf8", "root", "");

    }
}