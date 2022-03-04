<?php
if(isset($_POST['submit']))
{
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
include "dbclass.php";
include "signupmodel.php";
include "signupcontroller.php";
$signup = new signupcontroller($name,$email,$pass);
$signup->signuser();
header('location:welcomeview.php');
}
?>