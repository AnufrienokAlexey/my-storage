<?php
session_start();

require __DIR__ . '/../../vendor/autoload.php';

$folder = new Folder();
$login = $_SESSION['user'][0]['login'];
$folder_name = 'New folder';
$folder->addNewFolder($login, $folder_name);

header('Location: all-folders.php');