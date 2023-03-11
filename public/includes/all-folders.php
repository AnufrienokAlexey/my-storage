<?php
session_start();

require __DIR__ . '/../../vendor/autoload.php';

$folder = new Folder();
$login = $_SESSION['user'][0]['login'];
$allFolders = $folder->selectAllFolders($login);
var_dump($allFolders);
$arr = [];

foreach ($allFolders as $allFolder) {
    $arr[] = $allFolder['folder_name'];
}

$_SESSION['user_folders'] = $allFolders;
//var_dump($arr);

header('Location: ../views/lk.php');