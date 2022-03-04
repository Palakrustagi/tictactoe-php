<?php
 //include "./../models/dbclass.php";
 //include "./../models/signupuser.php";
 include "./../controllers/signupcontr.php";



    
$name=$_POST['username'];
$email=$_POST['email'];
$passw=$_POST['password'];

$signup = new signupcontr($name,$email,$passw);
$signup->signuser();
header('location:./../views/welcomeview.php');

?>