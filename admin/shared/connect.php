<?php


   class Database {

        private $host = "fairfuture-do-user-2709110-0.b.db.ondigitalocean.com";
        private $db_name = "fairfuture";
        private $username = "fair";
        private $password = 'AVNS_LIPSrjVuOe4pWNO';  
        public  $conn;

        public function dbConnection() {
            $this->conn = null;    
            try {
                $this->conn = new PDO("pgsql:host=" . $this->host . ";port='25060';dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            catch(PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
            
            return $this->conn;
        }
    }

?>