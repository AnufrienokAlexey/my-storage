<?php
session_start();

require __DIR__ . '/../../vendor/autoload.php';
var_dump($_POST);

$folder = new Folder();
$login = $_SESSION['user'][0]['login'];
$allFolders = $folder->deleteFolder($login, $_POST['id']);
//var_dump($allFolders);
//$arr = [];

//foreach ($allFolders as $allFolder) {
//    $arr[] = $allFolder['folder_name'];
//}
//
//$_SESSION['user_folders'] = $arr;
//var_dump($arr);
header('Location: all-folders.php');