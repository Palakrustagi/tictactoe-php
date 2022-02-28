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
        <title>Home</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


        <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
    </head>

    <body>
        <ul>
            <li style="float: left;"><a href="home.php">Home</a></li>
            <li><a href="logout.php">Logout <span class="glyphicon glyphicon-off"></span></a></li>
           <li> <a href="active.php">Active <span class="glyphicon glyphicon-user"></span></a></li>
           <li> <a href="edit.php">Edit <span class="glyphicon glyphicon-edit"></span></a></li>
           </ul>
           <div class="box">
        
           <h1 style="color: rgb(94, 94, 253);font-size:50px;"><b>WELCOME</b></h1>
           
           </div>
           
           <div class= "container">
            <div class="tttgame">
               
                    

                <img src="ttt.jpg"  alt="tictactoe" height="300px" width="250px">
                <a href="game.php" class="btn btn-primary" class="btn" role="button">Play Now</a>
                
                </div>
                </div>
          
              
           
           
                
              
           
              </div>

           
           

          
           
           
            
            
        
    </body>
</html>
    
