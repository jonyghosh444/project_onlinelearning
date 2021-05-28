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
<head>
	<title><?php echo $_SESSION['username']; 
                
  ?>
    
  </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  border-radius: 80%;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}



</style>


</head>



<body>


<body>


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="Tutorhome.php"> <?php echo $_SESSION['username']; 
                
  ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Tutorhome.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Upload 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         
          <a class="dropdown-item" href="c.php">C </a> 
          <a class="dropdown-item" href="c++.php">C++</a>
          <a class="dropdown-item" href="python.php">Python</a>
          <a class="dropdown-item" href="java.php">Java</a>
          <a class="dropdown-item" href="html.php">Html</a>
          <a class="dropdown-item" href="php.php">Php</a>
          <a class="dropdown-item" href="javascript.php">Java script</a>

        </div>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="tlogout.php">Logout</a> 

      </li>
    </ul>
   
  </div>
</nav>










<section class="py-5">

<div class="card">
  <?php

          

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM tutorinfo WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
         


          ?>

                 <?php
        
          
        $q = "SELECT * FROM tutorinfo where id='$id'";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

           $image = $user_row['image'];
          
          ?>

          <div>
            <img src="<?php echo 'image/user image/Tutor/'.$image;?>" alt="Avatar" style="width:290px" >
          </div>

        <?php }
         ?>
  
  <h1><?= $user_row['firstname'], $user_row['lastname'] ?></h1>
  <p class="title"> <?= $user_row['age'] ?> Years old</p>
  <p><?= $user_row['email'] ?></p>
 
  <p><a href=updatetutorprofile.php>Edit profile</a></p>
</div>

</section>






   
<hr>
   <div >
             <h1 class="text-center" style="color:rgb(102, 0, 204);">My videos</h1>
<hr>
   </div>


<section class="my-3 py-3">
   <div class="py-2">
             <h3 class="text-center">C progrraming tutorial</h3><br>

   </div>
   <div style="text-align:center">
    <a href="c.php">Upload a new video</a>
     
   </div>

  
  <div class="container mt-3 mb-3">
    
    <div class="row">
       
         

   <?php
        
          
        $q = "SELECT * FROM c where id='$id'";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

          $name = $row['video'];
          $tittle = $row['tittle'];
          ?>

          <div class="col-md-4">
            <video width="100%" controls preload="none" poster="image/image/c.jpg">
            <source src="<?php echo 'upload/'.$name;?>">
          </video>
          <p><b><?= $tittle = $row['tittle']?></b></p>
          </div>

        <?php }
?>
</div>
        </div>



</section>
<hr>
<section class="my-5 py-5">
     <div class="py-2">
             <h3 class="text-center">C++ tutorial</h3>
     </div>
     <div style="text-align:center">
    <a href="c++.php">Upload a new video</a>
     
   </div>

  <div class="container mt-3 mb-3">
    
    <div class="row">
       
   <?php
        
          
        $q = "SELECT * FROM cplus where id='$id'";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

          $name = $row['video'];
          $tittle = $row['tittle'];
          ?>

          <div class="col-md-4">
            <video width="100%" controls preload="none" poster="image/image/cplusplus.jpg">
            <source src="<?php echo 'upload/'.$name;?>">
          </video>
          <p><b><?= $tittle = $row['tittle']?></b></p>
          </div>

        <?php }
?>
</div>
        </div>



</section>
<hr>
<section class="my-5 py-5">
     <div class="py-2">
             <h3 class="text-center">HTML tutorial</h3>
   </div>
    <div style="text-align:center">
    <a href="html.php">Upload a new video</a>
     
   </div>
 
  <div class="container mt-3 mb-3">
    
    <div class="row">
       
   <?php
        
          
        $q = "SELECT * FROM html where id='$id'";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

          $name = $row['video'];
          $tittle = $row['tittle'];
          ?>

          <div class="col-md-4">
            <video width="100%" controls preload="none" poster="image/image/html.jpg">
            <source src="<?php echo 'upload/'.$name;?>">
          </video>
          <p><b><?= $tittle = $row['tittle']?></b></p>
          </div>

        <?php }
?>
</div>
        </div>



</section>
<hr>
<section class="my-5 py-5">
     <div class="py-2">
             <h3 class="text-center"> Java tutorial</h3>
   </div>
     <div style="text-align:center">
    <a href="java.php">Upload a new video</a>
     
   </div>

  <div class="container mt-3 mb-3">
    
    <div class="row">
       
   <?php
        
          
        $q = "SELECT * FROM java where id='$id'";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

          $name = $row['video'];
          $tittle = $row['tittle'];
          ?>

          <div class="col-md-4">
            <video width="100%" controls preload="none" poster="image/image/java1.jpg">
            <source src="<?php echo 'upload/'.$name;?>">
          </video>
          <p><b><?= $tittle = $row['tittle']?></b></p>
          </div>

        <?php }
?>
</div>
        </div>



</section>
<hr>
<section class="my-5 py-5">
     <div class="py-2">
             <h3 class="text-center">Javascript tutorial</h3>
   </div>
     <div style="text-align:center">
    <a href="javascript.php">Upload a new video</a>
     
   </div>

  <div class="container mt-3 mb-3">
    
    <div class="row">
       
   <?php
        
          
        $q = "SELECT * FROM javascript where id='$id'";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

          $name = $row['video'];
          $tittle = $row['tittle'];
          ?>

          <div class="col-md-4">
            <video width="100%" controls preload="none" poster="image/image/javascript.jpg">
            <source src="<?php echo 'upload/'.$name;?>">
          </video>
          <p><b><?= $tittle = $row['tittle']?></b></p>
          </div>

        <?php }
?>
</div>
        </div>



</section>
<hr>
<section class="my-5 py-5">
     <div class="py-2">
             <h3 class="text-center"> PHP tutorial</h3>
   </div>
     <div style="text-align:center">
    <a href="php.php">Upload a new video</a>
     
   </div>

  <div class="container mt-3 mb-3">
    
    <div class="row">
       
   <?php
        
          
        $q = "SELECT * FROM php where id='$id'";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

          $name = $row['video'];
          $tittle = $row['tittle'];
          ?>

          <div class="col-md-4">
            <video width="100%" controls preload="none" poster="image/image/php1.jpg">
            <source src="<?php echo 'upload/'.$name;?>">
          </video>
          <p><b><?= $tittle = $row['tittle']?></b></p>
          </div>

        <?php }
?>
</div>
        </div>



</section>
<hr>
<section class="my-5 py-5">
     <div class="py-2">
             <h3 class="text-center">Python tutorial</h3>
   </div>
     <div style="text-align:center">
    <a href="python.php">Upload a new video</a>
     
   </div>

  <div class="container mt-3 mb-3">
    
    <div class="row">
       
   <?php
        
          
        $q = "SELECT * FROM python where id='$id'";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

          $name = $row['video'];
          $tittle = $row['tittle'];
          ?>

          <div class="col-md-4">
            <video width="100%" controls preload="none" poster="image/image/python2.jpg">
            <source src="<?php echo 'upload/'.$name;?>">
          </video>
          <p><b><?= $tittle = $row['tittle']?></b></p>
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
    <a href="Tutorhome.php" style="color:white">WWW.Onlinelearningcentre.com</a> <br>
      
    <a href="tlogout.php" style="color:white">Logout</a> 

      
   </div> 


</footer>


</html>
