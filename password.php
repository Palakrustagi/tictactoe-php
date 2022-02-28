<?php
session_start();
      
$host="localhost";
$us="root";
$pass="";
$con=mysqli_connect("$host","$us",$pass);
if($con)
{
    echo"database connection successful";
    
}
else
{
die(" database connection not successful <br>");

}
mysqli_select_db($con,"registrationdata");
$opass=$_POST["oldpass"];
$npass=$_POST["newpass"];



$q="select * from userdata where password='$opass' and isonline = 'yes'";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{   
    
    
        $qx = "UPDATE userdata
        SET password = '$npass'
        WHERE password = '$opass'";  

        mysqli_query($con,$qx);
        

    header('location: home.php');
}
else
{ 
    echo ("<script LANGUAGE='JavaScript'>
window. alert('enter correct details/please login to continue');
window. location. href='http://localhost/tictactoe-php/edit.php';
</script>");
    
}


?>