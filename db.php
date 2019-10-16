<?php
///**
// * Connect MySQL with PDO class
// */
//
///* Database credentials. Assuming you are running MySQL
//server with default setting (user 'root' with no password) */
//define('DB_SERVER', '127.0.0.1:8889');
//define('DB_USERNAME', 'dingjie');
//define('DB_PASSWORD', 'dingjie');
//define('DB_NAME', 'auston');
//
//        try{
//            $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
//            // Set the PDO error mode to exception
//            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        } catch(PDOException $e){
//            die("ERROR: Could not connect. " . $e->getMessage());
//
//}
//


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