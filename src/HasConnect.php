<?php

trait HasConnect
{
    public function getAllDatabases(): PDO
    {
        $host = parent::getHost();
        $username = parent::getUsername();
        $password = parent::getPassword();

        return new PDO("mysql:host=$host", "$username", "$password");
    }

    public function getDatabase() : PDO
    {
        $host = parent::getHost();
        $username = parent::getUsername();
        $password = parent::getPassword();
        $dbname = parent::getDbname();
        $charset = parent::getCharset();

        return new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", "$username", "$password");
    }

    public function getException($e, $dbname): void
    {
        echo "Неудачная попытка подключения к базе данных $dbname: " . $e->getMessage();
    }
}

