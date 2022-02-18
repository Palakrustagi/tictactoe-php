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
die("connection not successful br");

}
mysqli_select_db($con,"registrationdata");
$uname=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$q="select * from signin where username='$uname' && email='$email' && password = '$pass' && mobile = '$mobile' && gender = '$gender'";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo " account already exists";
}
else
{
    $qx= "insert into signin (username , email , password , mobile , gender) values ('$uname' , '$email', '$pass' , '$mobile' , '$gender')";
    mysqli_query($con , $qx);
    header('location: login.php');
}


?>