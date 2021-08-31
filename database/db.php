<?php

class Dbcontroller{
    protected $dbbHost= '127.0.0.1';
    protected $dbUSER= 'root';
    protected $dbPASS= '';
    protected $dbNAME= 'blog';
    public $conn=null;
    
    public function __construct(){
    $this->conn =new mysqli($this->dbbHost,$this->dbUSER,$this->dbPASS,$this->dbNAME);
    
    if($this->conn->connect_error){
    echo "error connecting to db".$this->conn->connect_error;
    };
    
    }
    
    protected function closeDb(){
        if($this->conn!=null){
    $this->conn->close();
        }
    }
    public function __destruct()
    {
        $this->closeDb();
    }
    

}