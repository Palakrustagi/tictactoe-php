<html>
    <head>
        <title>Tictactoe</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
              
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <ul>
            <li style="float: left;"><a href="home.php">Home</a></li>
            <li><a href="logout.php">Logout <span class="glyphicon glyphicon-off"></span></a></li>
           <li> <a href="active.php">Active <span class="glyphicon glyphicon-user"></span></a></li>
           <li> <a href="edit.php">Edit <span class="glyphicon glyphicon-edit"></span></a></li>
           </ul>
         

        <script>
              
               var turn = 1;
               var win = -1;
               var matrix = [
                   [-1,-1,-1],
                   [-1,-1,-1],
                   [-1,-1,-1]
               ]
              
               //value -1 means that , that cell has not been clicked yet.
               function playeraction(elem,row,col)
               
               {   if (elem.innerHTML != "") return;
                   if (win != -1) return;
                    
                matrix[row][col]=turn;
                   if(turn==1)
                   {  
                       elem.innerHTML="X";
                       document.getElementById("message").innerHTML = "Player 2 turn";
                       turn =2;
                       
                   }
                   else if(turn ==2)
                   {
                       elem.innerHTML="O";
                       document.getElementById("message").innerHTML = "Player 1 turn";
                       turn = 1;
                   }

                   for(var i=0 ; i<3 ; i++)
                   {
                       if(matrix[i][0]== matrix[i][1] && matrix[i][1]== matrix[i][2]) win=matrix[i][0];
                       if(matrix[0][i]== matrix[1][i] && matrix[1][i]== matrix[2][i]) win=matrix[0][i];
                   }
                     if(matrix[0][0]== matrix[1][1]== matrix[2][2]) win=matrix[1][1];
                     if(matrix[0][2]== matrix[1][1] == matrix[2][0]) win=matrix[1][1];

                    if(win !=-1)
                     {
                        document.getElementById("message").innerHTML = "Player " + win + " has won the game!";
                        if(win=1)
                        {
                            document.getElementById("one").innerHTML = " " + win + "";
                            document.getElementById("two").innerHTML = " " + 0 + "";
                        }
                        else if (win=2){
                            document.getElementById("two").innerHTML = " " + win + "";
                            document.getElementById("one").innerHTML = " " + 0 + "";
                        }
                     }
                  
               }
            
              
            </script>
            
            
         
           
           <div class="message" id="message">Player 1 turn</div>
           
           <div class="container">
           
               <div class="gameboard">
                   <div class="row">
                       <div class="col" onclick="playeraction(this,0,0)"></div>
                       <div class="col" onclick="playeraction(this,0,1)"></div>
                       <div class="col" onclick="playeraction(this,0,2)"></div>
                   </div>
                   <div class="row">
                    <div class="col" onclick="playeraction(this,1,0)"></div>
                    <div class="col" onclick="playeraction(this,1,1)"></div>
                    <div class="col" onclick="playeraction(this,1,2)"></div>
                </div>
                <div class="row">
                    <div class="col" onclick="playeraction(this,2,0)"></div>
                    <div class="col" onclick="playeraction(this,2,1)"></div>
                    <div class="col" onclick="playeraction(this,2,2)"></div>
                  
                </div>
                
               </div>
               <div class="butn">
               <a href="game.php"  class="btn btn-primary" class="btn" role="button">Play Again</a>
               </div>
               <div class="row">
               <div class="col-xs-4 score"><b><u> SCORE: </u></b></div>
               <div class="score">
                   <div class="row">
                       <div class="col-xs-4 ">PLAYER1:  </br><div class="one" id="one">  </div> </div>
                       
                       <div class="col-xs-4"> PLAYER2:  <div class="two" id="two">   </div> </div>
                   </div>
           </div>
          
              
           </div>
               </div>
            
          
           </div>
          

       
    </body>