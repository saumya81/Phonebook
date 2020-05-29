<?php 

$con=mysqli_connect('localhost','id13875616_saumya' 'KQd?_F6Q2kt7T37*');
mysqli_select_db($con,'id13875616_phonebook');


if(isset($_POST["submit"])){
$name=$_POST['name'];
$email=$_POST['email'];
$pn=$_POST['pn'];
$dob=$_POST['dob'];

        $q="insert into details(name,phoneno,dob,email) values ('$name','$pn','$dob','$email')";

        if($con->query($q))
        {
           echo '<script>alert("Contact added sucessfully")</script>';
            header('Location:index.php');


        }
        else
        {
            echo"Error: ".$con->error;
        }
 }
 

?>



<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

           <link rel="stylesheet" type="text/css" href="style1.css"> 
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
        <div class="body1">
       <div class="container">
  <h2>ADD NEW CONTACT</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
      <div class="form-group">
      <label for="dob">Email:</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter DOB" name="dob" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="number">Phone Number</label>
      <input type="text" class="form-control" id="pn" placeholder="Enter Number" name="pn" required>
    </div>
      
    
    <button type="submit" name="submit" class="btn btn-primary">ADD</button>
  </form>
</div>

        </div>
        
       
    
    
    
    
    </body>


</html>