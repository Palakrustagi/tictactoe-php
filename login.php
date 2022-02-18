<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="login.css">
    </head>
    <body>
        <ul>
            <li style="float: left;"><a href="#">Dashboard</a></li>
            <li style="padding-right: 3px;"><a href="Register.html">Register</a></li>
            
          </ul>

        <div class="container">
            <h1>
               <b>LOGIN</b> 
            </h1>
            <form action="check.php" method="post">
                <div class="form-group">  
                    <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 colm">
                    <b>Username:</b><input type="text" class="form-control" placeholder="enter username *" name="username"  required />  
                </div>
                </div>
                </div>  
                <div class="form-group" >  
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 colm">
                        <b>Password:</b> <input type="password" class="form-control" placeholder="Your password *" name="password" required />  
                    </div>
                    </div>
                    </div>  
                   <button class="btn btn-primary" type="submit">Login</button>
                </form>

                </div>
                <h4 style="padding-top: 15px;">Don't have an account? <a href="register.php">click here</a></h4>
            </body>
</html>
