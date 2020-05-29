<?php

session_start(); 
$nm=$_SESSION['name'];
$conn = mysqli_connect("localhost", "id13875616_saumya", "KQd?_F6Q2kt7T37*", "id13875616_phonebook");
    
 if(isset($_POST['delete'])) 
 {
    $q="delete from `details1 where `name`=`$nm`" ;
     $res=$conn->query($q);
      
        
         header('Location:index.php');
  
 }

          

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <style>
            body{
               margin:0 ;
                padding:0 ;
                box-sizing:border-box;
                font-family: 'Josefin Sans', sans-serif;
                padding-left: 500px;
    
                }
            .body1
            {

                margin-top: 120px;
                  max-width: 600px;
                  height: 500px;
                background-color: aliceblue;
                padding-left: 50px;
                 border: 5px solid black;


            }
        </style>  
        
    </head>
    <body>
       <div  class="body1">
       <div class="container">
  <h2><?php echo $_SESSION['name'] ?></h2>
  
  <div class="card" style="width:400px">
   <i class="fas fa-address-book fa-10x"></i>
    <div class="card-body">
    <h4 class="card-title"><?  php echo $_SESSION['name'] ?></h4>    
<div class="btn-group"><form method="post" action="namedetails.php">
      <span><button type="submit" name="edit" class="btn btn-info">EDIT CONTACT</button></span>
    <br><br><span><button type="submit" name="delete" class="btn btn-info">DELETE CONTACT</button></span></form>
        </div>    
    </div>
  </div>
           
  <br>
  
  </div>
        
      </div>   
    </body>
</html>
