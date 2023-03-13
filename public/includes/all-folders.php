<?php
session_start();

require __DIR__ . '/../../vendor/autoload.php';

$folder = new Folder();
$login = $_SESSION['user'][0]['login'];
//var_dump($login);
$allFolders = $folder->selectAllFolders($login);
//var_dump($allFolders);
$arr = [];

foreach ($allFolders as $allFolder) {
    $arr[] = $allFolder['folder_name'];
}

$_SESSION['user_folders'] = $allFolders;

$a = $folder->selectCurrentFolder($login, 3)[0]['file_path'];
var_dump($a);

//var_dump($arr);

header('Location: ../views/lk.php');