<?php
session_start();

$host="localhost";
$us="root";
$pass="";
$con=mysqli_connect("$host","$us",$pass);
if($con)
{
    echo"connection to database successful <br>";
}
else
{
die("connection not successful <br>");

}
mysqli_select_db($con,"registrationdata");
$uname=$_POST["username"];

$pass=$_POST["password"];


$q="select * from userdata where username='$uname'  && password = '$pass' ";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>=1)
{   
    
    
        $qx = "UPDATE userdata
        SET isonline = 'yes'
        WHERE username = '$uname'";

        mysqli_query($con,$qx);
        
    
   $_SESSION['USERNAME'] = $uname;
    header('location: home.php');
}
else
{
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('enter correct details');
    window. location. href='http://localhost/tictactoe-php/login.php';
    </script>");
}


?>