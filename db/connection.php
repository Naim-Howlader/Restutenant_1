<?php
class Connection{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "all_ajax";
    protected $connection;
    public function __construct(){
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if($this->connection->connect_error){
            echo "Connection Failed".$this->connection->connect_error;
        }
        else{
            //echo "Connection Successful";
        }
    }
}
$connection = new Connection();
?>