<?php

class Connect extends Db {

    use HasConnect;

    public function createNewDatabase(): void
    {
        $dbname = parent::getDbname();
		try {
            $databases = $this->getAllDatabases()->query('SHOW DATABASES')->fetchAll(PDO::FETCH_COLUMN);
			if (!in_array($dbname, $databases)) {
                $this->getAllDatabases()->exec("
					CREATE DATABASE $dbname;
					use $dbname;
					CREATE TABLE `users` (
					id integer auto_increment primary key, 
					login varchar(30), email varchar(100), 
					password varchar(255), 
					full_name varchar(100));
                ");
			}
		}
		catch(PDOException $e) {
			$this->getException($e, $dbname);
		}
	}

    public function getTable($table)
    {
        $dbname = parent::getDbname();
        try {
             return $this->getDatabase()->query("SELECT * FROM $table");
        }
        catch(PDOException $e) {
            $this->getException($e, $dbname);
        }
    }
}