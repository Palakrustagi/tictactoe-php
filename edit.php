<?php
session_start();
if(empty($_SESSION))
{
    header('location:login.php');
}
else 
{
}
?>
<html>
    <head>
        <title>Edit</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


        <link rel="stylesheet" href="edit.css?v=<?php echo time(); ?>">
    </head>

    <body>
        <ul>
            <li style="float: left;"><a href="home.php">Home</a></li>
            <li><a href="logout.php">Logout <span class="glyphicon glyphicon-off"></span></a></li>
           <li> <a href="active.php">Active <span class="glyphicon glyphicon-user"></span></a></li>
           </ul>
           <div class="message">
           <div class="info">

               <h2><b> <u>Edit your profile!</u></b></h2>
              
           <form action="username.php" method="post">
           <div class="name"><b><u>Username:</u></b></div> 
               <div class="row">
               
                   <div class="col-sm-4">
                <input type="text"  class="form-control" placeholder="enter old username*" name="oldname"  required/>  
                </div>
                  
                    <div class="col-sm-4">
                  
                   <input type="text" class="form-control"  placeholder="enter new username*"  minlength="6" maxlength="15" name="newname" required />  
                    </div>
                    <div class="col-sm-4">
                   <button class="btn btn-primary" type="submit">Change Username</button>
                </div>
               </div>
           </form>
           <form action="password.php" method="post">
               <div class="pass"><b><u>Password:</u></b></div> 
                <div class="row">
                   <div class="col-sm-4">
               
                  
                   <input type="password" class="form-control" placeholder="enter old passsword*" name="oldpass" required />  
                
                   </div>
                    <div class="col-sm-4">
                   
                   <input type="password" class="form-control" placeholder="enter new password*" minlength="7" maxlength="12" name="newpass" required/>  
                
                </div>
                <div class="col-sm-4">
                <button class="btn btn-primary" type="submit">Change Password</button>
                </div>
                
                 
           </form>
           </div>
           </div> 
         
    </body>