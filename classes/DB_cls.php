<?php


class DB
{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;
    private $charset;
    protected  function connect(){
        $this->serverName='localhost';
        $this->userName='root';
        $this->password='';
        $this->dbName='cmsdb';
        $this->charset='utf8mb4';
        try{
        $dsn="mysql:host=$this->serverName;dbname=$this->dbName;charset=$this->charset";
        $pdo=new PDO($dsn,$this->userName,$this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
        echo "connect successful";
        }catch (Exception $e){
            die("connect fail".$e->getMessage());
        }

    }
}