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
$oname=$_POST["oldname"];
$nname=$_POST["newname"];



$q="select * from userdata where username='$oname'and isonline = 'yes' ";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{   
    
    
        $qx = "UPDATE userdata
        SET username = '$nname'
        WHERE username = '$oname' ";

        mysqli_query($con,$qx);
        
    
   $_SESSION['USERNAME'] = $nname;
    header('location: home.php');
}
else
{
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('enter correct details/Please login to continue');
    window. location. href='http://localhost/tictactoe-php/edit.php';
    </script>");
    
}


?>