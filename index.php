<?php


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `details` WHERE CONCAT(`name`,`phoneno`,`email`,`dob`)  LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `details`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "id13875616_saumya", "KQd?_F6Q2kt7T37*", "id13875616_phonebook");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
if(isset($_POST['submit1']))
{
            session_start();
            $_SESSION['name']=$_POST['submit1'];
            header('Location:namedetails.php');
}
 

?>
<!DOCTYPE html>
<html>
    <head>
                   <link rel="stylesheet" type="text/css" href="style.css"> 

         <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    </head>
    
    <body>
        <div class="outer">
            <form method="post" action="index.php">
        <h1>RM-PHONEBOOK</h1>
                
            <input type="text" name="valueToSearch" placeholder="Search name...">
            <button type="submit" name="search" value="search"><i class="fa fa-search"></i></button><br><br>
            </form>
            <form method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="inner">
             <?php while($row = mysqli_fetch_array($search_result)):
                    ?>
          
                
                    <button type="submit1" value="<?php echo $row['name']; ?>" name="submit1" class="btn" ><?php echo $row['name']; ?></button><br>
          
                    
            <?php endwhile;?>
                
                </div>
                </form>
              <div class="add" ><a href="add.php"> <i  class="fas fa-plus-circle fa-3x" style="color:black"></i></a></div>
           

       
        
        </div>
    
    
    
    
    </body>


</html>