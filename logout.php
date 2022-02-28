<?php
session_start();

$host="localhost";
$us="root";
$pass="";
$con=mysqli_connect("$host","$us",$pass);
$user = $_SESSION["USERNAME"];

if($con)
{
    echo"connection to database successful <br>";
}
else
{
die("connection not successful <br>");

}  

mysqli_select_db($con,"registrationdata");

$q = "UPDATE userdata           
        SET isonline = 'no'
        WHERE username = '$user'";

mysqli_query($con,$q);

unset($_SESSION["USERNAME"]);

header("Location:login.php");
?>