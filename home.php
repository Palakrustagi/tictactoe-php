<html>
    <head>
        <title>Home</title>
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
<link rel="stylesheet" href="home.css">
    </head>
    <body>
        <ul>
            <li style="float: left;"><a href="home.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
           <li> <a href="active.php">Active <span class="glyphicon glyphicon-user"></span></a></li>
           </ul>
               <div class="box">
                   <div class="container">
                 
                 <?php

                  session_start();

                  $host="localhost";
                  $us="root";
                  $pass="";
                  $con=mysqli_connect("$host","$us",$pass);
                  
                  mysqli_select_db($con,"registrationdata");
                  $q= "select * from signin";
                  $result = mysqli_query($con,$q);



                  $data = mysqli_fetch_assoc($result);
                  echo "<b> WELCOME   ". $data['username'] . "</b>  <br>";

                 ?>
               </div>
               </div>
        
           
           
            
            
        
    </body>
</html>
    
