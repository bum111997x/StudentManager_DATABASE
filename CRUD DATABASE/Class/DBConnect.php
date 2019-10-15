<?php


class DBConnect
{
    protected $dsn;
    protected $username;
    protected $pass;

    public function __construct($dsn,$username,$pass)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->pass = $pass;
    }

    public function connect(){
        $conn = null;
        try {
            $conn = new PDO($this->dsn,$this->username,$this->pass);
        }catch(PDOException $e){
            return $e->getMessage();
        }
        return $conn;
    }
}