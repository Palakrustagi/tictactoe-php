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
$name = $_POST['name'];
$number = $_POST['number'];
$city = $_POST['city'];

$q="select * from users where name='$name' && contact_no ='$number' && city = '$city' ";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{
    
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('Account already exists! Try again!');
    window. location. href='http://localhost/tictactoe-php/sqllogin.php';
    </script>");
    
}
else
{
    $qx= "insert into users (name , contact_no , city) values ('$name' , '$number', '$city' )";
    mysqli_query($con , $qx);
    echo "data inserted";


}
?>