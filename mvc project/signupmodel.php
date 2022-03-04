<?php

class signupmodel extends dbclass{
    protected function setuser($name,$email,$pass)
    {
        $stmt = $this -> connect()-> prepare('insert into mvcsignin(mvcsignin_username, mvcsignin_email, mvcsignin_password) values ($name,$email.$pass)');
        if(!$stmt->execute(array($name , $email,$pass)))
        
        {
            $stmt = null;
            header("location:signinnview.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkuser($email,$pass)
    {
        $stmt = $this -> connect()-> prepare('select * from mvcsignin where mvcsignin_email='$email' and mvcsignin_password ='$pass' ');
        if(!$stmt->execute(array($email,$pass)))
        {
            $stmt = null;
            header("location:signinnview.php?error = stmtfailed");
            exit();
        }
        $resultcheck;
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