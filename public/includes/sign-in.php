<?php
session_start();
require __DIR__ . '/../../vendor/autoload.php';
var_dump($_POST);

if (($_POST['login'] !== null) AND ($_POST['password'] !== null)) {
	$user = new User();
	$_SESSION['user'] = $user->selectUserFromDatabase($_POST['login'], md5($_POST['password']));
    if (empty($_SESSION['user'])) {
        $_SESSION['success_register'] = 'Такое сочетание пользователя и пароля не существует!';
        header('Location: ../index.php');
    } else {
//        $folder = new Folder();
//        $allFolders = $folder->selectAllFolders($_POST['login']);
//        var_dump($allFolders);
//        $arr = [];
//
//        foreach ($allFolders as $allFolder) {
//            $arr[] = $allFolder['folder_name'];
//        }
//
//        $_SESSION['user_folders'] = $arr;
//        var_dump($arr);
        header('Location: all-folders.php');
    }
}
