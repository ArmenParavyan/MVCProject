<?php 

namespace Database;

class Database {
    private $host; 
    private $username; 
    private $password; 
    private $dbname; 
    private $connection; 
    private static $instance = null;

    public function __construct() {
        $this->loadConfig();
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname); 
        $this->connection = $conn;
        if (!$this->connection) {
            echo 'some error';
        }
    }

    public function loadConfig() {
        $this->host = DB_HOST; 
        $this->username = DB_USERNAME; 
        $this->password = DB_PASSWORD; 
        $this->dbname = DB_DATABASE; 
    }

    public function getConnection() {
        return $this->connection;
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}