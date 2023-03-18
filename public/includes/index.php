<?php
session_start();

require __DIR__ . '/../../vendor/autoload.php';

$config = require 'config.php';
$host = $config['host'];
$database = $config['dbname'];
$charset = $config['charset'];
$username = $config['username'];
$password = $config['password'];

$connect = new Connect("$host", "$database", "$charset", "$username", "$password");
$connect->createNewDatabase();
var_dump($connect->getTable('users')->fetchAll(PDO::FETCH_ASSOC));

if (!empty($_SESSION['user'])) {
    header('Location: views/lk.php');
}