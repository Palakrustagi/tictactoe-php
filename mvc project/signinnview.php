<?php
session_start();
if(empty($_SESSION))
{}
else 
{
    header ('location:home.php');
}
?>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="signinn.css">
    </head>
    <body>
        <ul>
            <li style="float: left;"><a href="#">Dashboard</a></li>
            <li><a href="login.php">Login</a></li>
            
          </ul>
        
        <div class="container">
            <h1>
               <b>REGISTER</b> 
            </h1>
            <form action="signupinc.php" method="post">
                <div class="form-group">  
                    <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 colm">
                  <b>Username:</b>   <input type="text" class="form-control" placeholder="enter username *" name="username"  required minlength="6" maxlength="15"/>  
                </div>
                </div>
                </div>
                <div class="form-group"> 
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 colm">
                    <b>Email:</b> <input type="Email" class="form-control" placeholder="enter Email *" name="email"  maxlength="20" required />  
                </div>
                </div>
                </div>    
                <div class="form-group" >  
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 ">
                       <b>Password: </b> <input type="password" class="form-control" placeholder="Your password *" name="password" minlength="7" maxlength="12" required />  
                    </div>
                    </div>
                    </div> 
                    <div class="form-group">  
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 ">
                      
                  
                    <button class="btn btn-primary" type="submit">Signin</button>
                </div>
            </form>
                </div>
                <h4 style="padding-top: 15px;">Already have an account? <a href="login.php">click here</a></h4>
            </body>
</html>
