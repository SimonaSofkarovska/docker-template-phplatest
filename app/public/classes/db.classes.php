<?php

class Db{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;
   // private $port;

    public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "secret123";
        $this->dbname = "school";
        $this->charset = "utf8mb4";
       // $this->port="3306";
        //";port=".$this->port.  sqlite

        try{
            $dsn="sqlite:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo= new PDO($dsn,$this->username,$this->password );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }catch (PDOException $e){
            echo "Connection failed: ".$e->getMessage();
        }

    }
}
