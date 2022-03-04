<?php
include 'dbclass.php';

class signupuser extends dbclass{
    protected function setuser($name,$email,$pass)
    {
        
        $stmt = $this-> connect()-> prepare('insert into mvcsignin(name, email, password) values (?,?,?)');
        
        if(!$stmt->execute(array($name , $email,$pass)))
        
        {
            $stmt = null;
            header("location:./../views/signin.php?error=stmtfailed");
            exit();
        }
        else{
            echo"worked";
        }
        $stmt = null;
    }

    protected function checkuser($email,$pass)
    {
        $stmt = $this -> connect()-> prepare("select * from mvcsignin where email= ? and password = ? ");
        if(!$stmt->execute(array($email,$pass)))
        {
            $stmt = null;
            header("location:./../views/signin.php?error = stmtfailed");
            exit();
        }
        $resultcheck = null;
        if($stmt->rowCount()>0){
            $resultcheck = false;
        }
        else{
            $resultcheck = true;
        
        }
       return $resultcheck;
    }
    

}
?>