<?php

class DBConnection{
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $pdo;

    public function __construct(string $dbname, string $host, string $username, string $password){
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;

    }

    public function getPDO(): PDO{
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
            PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8'
        ];
        return $this->pdo ?? $this->pdo = new PDO("mysql:dbname={$this->dbname};
            host={$this->host}", $this->username, $this->password, $options);
    }
    
}

?>