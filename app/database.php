<?php






    class DataBase {
        private $host;
        private $dbase = "soloTest";
        private $username;
        private $password;
        private $server;

        public function __construct()
        {
            try 
            {
                $conn = new PDO("mysql:host=". $this->server . ";dbname=". $this->dbase . ", $this->username, $this->password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
            }
            catch (PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }