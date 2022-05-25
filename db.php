<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

class Database {

    private $host = "fairfuture-do-user-2709110-0.b.db.ondigitalocean.com";
    //fairfuture-do-user-2709110-0.b.db.ondigitalocean.com
    private $db_name = "fairfuture";
    private $username = "fair";
    private $password = 'AVNS_LIPSrjVuOe4pWNO';
    //private $port = 25060;

    public function dbConnection() {
        $this->conn = null;    
        try {
            $this->conn = new PDO("pgsql:host=" . $this->host . ";port='25060';dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected";
        }

        catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        
        
        return $this->conn;
    }
}

?>
