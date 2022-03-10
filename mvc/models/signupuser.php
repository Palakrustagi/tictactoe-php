<?php
include 'dbclass.php';

class signupuser extends dbclass{
    protected function setuser($name,$email,$pass)
    {
        
        try{

            $connection=$this-> connect();
            $connection->beginTransaction();
             $stmt = $connection-> prepare('insert into mvcsignin(name, email, password) values (?,?,?)');
                
                if(!$stmt->execute(array($name , $email,$pass)))
                
                {
                    $stmt = null;
                    header("location:./../views/signin.php?error=stmtfailed");
                    exit();
                }
        
                   $temp=$connection->commit();
                    
        }
        catch(Exception $e){
            $connection->rollBack();
            echo "Failed : ".$e->getMessage();
        }
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