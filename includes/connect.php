<?php

try {
	$connect = new PDO("mysql:host=localhost", "root", "");
	$databases = $connect->query('show databases')->fetchAll(PDO::FETCH_COLUMN);

	if(!in_array("$_POST[login]",$databases)) {
		$connect->exec("
			CREATE DATABASE `$_POST[login]`;
			use `$_POST[login]`;
			CREATE TABLE `users` (id integer auto_increment primary key, login varchar(30), email varchar(100), password varchar(30), full_name varchar(100));
			CREATE TABLE `folders` (id integer auto_increment primary key, folder_name varchar(30));
		");

	}
}
catch(PDOException $e)
{
	echo "Неудачная попытка подключения к базе данных: " . $e->getMessage();
}