<?php
class dbclass{
    protected $host ='localhost';
    protected $user ='root';
    protected $pwd ='';
    protected $dbName ='registrationdata';
    public $con = null;
    public function connect()
    
    {
        $this->con = mysqli_connect($this -> host, $this -> user, $this -> pwd , $this ->dbName);
        if($this->con)
       { echo "connect successful"; }
        else
       { die("connection not succesful"); }
        
    }
}
$one = new db();
$one -> connect();


?>