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
<link rel="stylesheet" href="register.css">
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
            <form action="sqllogin.php" method="post">
                <div class="form-group">  
                    <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 colm">
                  <b>FullName:</b>   <input type="text" class="form-control" placeholder="enter name *" name="name"  required minlength="6" maxlength="15"/>  
                </div>
                </div>
                </div>
                <div class="form-group"> 
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 colm">
                    <b>Contact no.:</b> <input type="text" class="form-control" placeholder="enter number *" name="number"  maxlength="20" required />  
                </div>
                </div>
                </div>    
                <div class="form-group" >  
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 ">
                       <b>City: </b> <input type="text" class="form-control" placeholder="Your city *" name="city" required />  
                    </div>
                    </div>
                    </div> 
                     
                    
                  
                    <button class="btn btn-primary" type="submit">Signin</button>
                </div>
            </form>
                </div>
               
            </body>
</html>
