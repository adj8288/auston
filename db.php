<?php

/**
 * Connect MySQL with PDO class
 */
class db
{

    private $dbhost = '127.0.0.1';
    private $dbuser = 'dingjie';
    private $dbpass = 'dingjie';
    private $dbname = 'auston';

    public function connect()
    {

        // https://www.php.net/manual/en/pdo.connections.php
        $prepare_conn_str = "mysql:host=$this->dbhost;dbname=$this->dbname;port";
        $pdo = new PDO($prepare_conn_str, $this->dbuser, $this->dbpass);

        // https://www.php.net/manual/en/pdo.setattribute.php
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // return the database connection back
        return $pdo;
    }
}



