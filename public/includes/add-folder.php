<?php
session_start();
var_dump($_POST['new_folder_name']);

require __DIR__ . '/../../vendor/autoload.php';

$folder = new Folder();
$login = $_SESSION['user'][0]['login'];
$folder_name = $_POST['new_folder_name'];
$folder->addNewFolder($login, $folder_name);

header('Location: all-folders.php');