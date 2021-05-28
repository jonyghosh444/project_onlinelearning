<?php

session_start();


$conn = mysqli_connect('localhost','root','1234');

mysqli_select_db($conn,'tutorreg');
//if(!isset($_SESSION['username'])){
  //header('Tutorlogin.php');
//}


?>





<!DOCTYPE html>
<html>
<header>



<title> Home </title>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">



</header>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="studenthomepage.php"><?php echo $_SESSION['username']; 
                
  ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="studenthomepage.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="tlogout.php">Logout</a> 

      </li>
  </div>
</nav>





<div class="py-5" style="text-align:center">
  
  <h1 style="color:#DF11C7">Javascript Tutorial</h1>

</div>
<hr>


<section class="py-5">
  

<div class="container mt-3 mb-3">
 
    
    <div class="row">
        <?php
        include("db.php");
          
        $q = "SELECT * FROM javascript";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

          $name = $row['video'];
          $tittle = $row['tittle'];
          
          ?>

          <div class="col-md-4">
            <video width="100%" controls preload="none" poster="image/image/javascript.jpg">
            <source src="<?php echo 'upload/'.$name;?>">
          </video>
           <p style="color:blue"><b><?= $tittle = $row['tittle']?></b></p>
          </div>

        <?php }
?>
</div>
        


</div>



</section>

<hr>


















  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


<footer  class="p-3 bg-dark " > 

                  <div style="text-align:center">
    <a href="Tutorhome.php" style="color:white">WWW.Onlinelearningcenter.com</a> <br>
      
    <a href="tlogout.php" style="color:white">Logout</a> 

      
   </div> 


</footer>







</html>