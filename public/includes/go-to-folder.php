<?php
session_start();
//var_dump($_POST);

require __DIR__ . '/../../vendor/autoload.php';

$folder = new Folder();
$login = $_SESSION['user'][0]['login'];
$result = $folder->selectCurrentFolder($login, $_POST['id']);
//$_SESSION['folder_path'] = $result[0]['file_path'];
var_dump($_SESSION['folder_path']);
var_dump($result[0]);

//$_SESSION['user_folders'] = $result[0];

header('Location: all-folders.php');

