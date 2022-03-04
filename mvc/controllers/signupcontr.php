<?php
include './../models/signupuser.php';
class signupcontr extends signupuser{
    private $name;
    private $email;
    private $pass;

    public function __construct($name,$email,$pass)
    {
      $this -> name = $name;
      $this -> email = $email;
      $this -> pass = $pass;
    }
    public function signuser()
    {
      if($this->usermtch()==false)
      {
        header("location:./../views/signin.php?error=accountalreadyexistst");
      exit();
      }
    $this->setuser($this->name,$this->email,$this->pass);
    }


  public function usermtch()
  {
    $result = null;
    if(!$this->checkuser($this->email,$this->pass))
    {
      $result = false;
    }
    else
    {
      $result = true;

    }
    return $result;
  }
}
?>