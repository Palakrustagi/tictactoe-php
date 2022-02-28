
<!DOCTYPE html>
<html>
<head>
    
    <title>online/offline</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="active.css">  

</head>
<body>
    <ul>
        <li style="float: left;"><a href="home.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li> <a href="edit.php">Edit <span class="glyphicon glyphicon-edit"></span></a></li>
       
      </ul>
      <div class="box">

        
      <div class="container">
          <div class="list">

          
         <b>
            <u>  LIST OF ACTIVE USERS: </u>
        </b>
    <br>
          </div>
       
      <?php
     session_start();

        $host="localhost";
        $us="root";
        $pass="";
        $con=mysqli_connect("$host","$us","$pass");
        if($con)
{
        echo"<br>"; 
}
else
{
die("connection not successful");

}
mysqli_select_db($con,"registrationdata");
$q= "select * from userdata where isonline='yes'";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
while($num>0)
{
$data = mysqli_fetch_assoc($result);
echo "<b> ". $data['username'] . "</b>  <br>";
$num--;
}



 
?>

    
      </div>
    </div>

</body>
</html>