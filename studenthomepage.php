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


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #FA5F39;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}



</style>


</head>



<body>





      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="studenthomepage.php"> <?php echo $_SESSION['username']; 
                
  ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="studenthomepage.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Subscribed Course 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         

          <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribejava WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
      <a class="dropdown-item" href="javatutorial.php">Java</a>

    <?php
  }else {
     
     ?>
      
     <?php
  }
?>

 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribec  WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
   

   <a class="dropdown-item" href="ctutorial.php">C </a> 
   
    <?php

  }else {
     
     ?>
    
     
     <?php
  }
?>

 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribecplus WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
   <a class="dropdown-item" href="cplustutorial.php">C++</a>
    <?php
  }else {
     
     ?>
        
     <?php
  }
?>


 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribepython WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
      <a class="dropdown-item" href="pythontutorial.php">Python</a>
    <?php
  }else {
     
     ?>
     
     <?php
  }
?>


    <?php      

  $q = "SELECT * FROM subscribehtml WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <a class="dropdown-item" href="htmltutorial.php">Html 5</a>

    <?php
  }else {
     
     ?>
     
     <?php
  }
?>   


    <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribejs WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
     <a class="dropdown-item" href="jstutorial.php">Java script</a>
    <?php
  }else {
     
     ?>
     
     <?php
  }
?>      
         
      
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribephp WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
     <a class="dropdown-item" href="phptutorial.php">Php</a>
   
    <?php
  }else {
     
     ?>
     
     <?php
  }
?>   
          
         
         

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
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];

         


          ?>

                 <?php
        
          
        $q = "SELECT * FROM studentsignup where id='$id'";

        $query = mysqli_query($conn,$q);
        
        while($row=mysqli_fetch_array($query)) { 

           $image = $user_row['image'];
          
          ?>

          <div>
            <img src="<?php echo 'image/user image/Student/'.$image;?>" alt="Avatar" style="width:290px" >
          </div>

        <?php }
         ?>
  
  <h1><?= $user_row['firstname'],  $user_row['lastname'] ?></h1>
  <p class="title"> <?= $user_row['age'] ?> Years old</p>
  <p><?= $user_row['email'] ?></p>
 
  <p><a href=updatestudentprofile.php>Edit profile</a></p>
</div>

</section>

<hr>









<section class="py-5">
  
  <h1 style="text-align:center " ><b>My Course<b></h1>

<hr>
<div class="container-fluid">
  <div class="row">
 
  
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribec  WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <div class="col-lg-2 col-md-1 col-12">
    <div class="card">
  <img src="image/course/c-programming.jpg" alt="Denim Jeans" style="width:100%">
        <p>Learn C programing</p>
    <small class="alert alert-success">Subscribed</small>
    <form action="ctutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary" >Go to course</button></p>
   </form>
   </div>
</div>

   
   
    <?php

  }else {
     
     ?>
    
     
     <?php
  }
?>
  



 
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribecplus WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/cplusplus.jpg" alt="Denim Jeans" style="width:100%">
  
 
  <p>Learn C++ programing</p>
    <small class="alert alert-success">Subscribed</small>
    <form action="cplustutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
   </div>
</div>
    <?php
  }else {
     
     ?>
        
     <?php
  }
?>
  




 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribepython WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
     <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/python programing.jpg" alt="Denim Jeans" style="width:100%">
  
  
  <p>Learn python programing</p>
 
    <small class="alert alert-success">Subscribed</small>
    <form action="pythontutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
   </div>
</div>
    <?php
  }else {
     
     ?>
     
     <?php
  }
?>
  





 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribejava WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
     <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/javaprograming.jpg" alt="Denim Jeans" style="width:100%">
  
 
  <p>Learn Java programing</p>
    <small class="alert alert-success">Subscribed</small>
    <form action="javatutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
   </div>
</div>

    <?php
  }else {
     
     ?>
      
     <?php
  }
?>
  

 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribehtml WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <div class="col-lg-2 col-md-1 col-12">
    <div class="card">
  <img src="image/course/Html5.jpg" alt="Denim Jeans" style="width:100%">
  
  
  <p>Learn HTML 5</p>
    <small class="alert alert-success">Subscribed</small>
    <form action="htmltutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
   </div>
    </div>

    <?php
  }else {
     
     ?>
     
     <?php
  }
?>
  


 
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribephp WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/php.jpg" alt="Denim Jeans" style="width:100%">
  
  
  <p>Learn Php programing</p>
    <small class="alert alert-success">Subscribed</small>
    <form action="phptutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
   </div>
</div>
    <?php
  }else {
     
     ?>
     
     <?php
  }
?>
  


 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribejs WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/javascript.jpg" alt="Denim Jeans" style="width:100%">
  
  
  <p>Learn Java script programing</p>
    <small class="alert alert-success">Subscribed</small>
    <form action="jstutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
   </div>
</div>
    <?php
  }else {
     
     ?>
     
     <?php
  }
?>
  





</section>











<hr>
<h1 style="text-align:center " ><b>More Courses<b></h1>
<hr>
<section class="py-5">
  

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2 col-md-1 col-12">
      
    </div>


    <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/c-programming.jpg" alt="Denim Jeans" style="width:100%">
  
  
  <p>Learn C programing</p>
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribec  WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <small class="alert alert-success">Subscribed</small>
    <form action="ctutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary" >Go to course</button></p>
   </form>
    <?php
  }else {
     
     ?>
     <p class="price">$80</p>
      <form action="cbuy.php" method="POST">
        <p><button type="submit"  name="submit">SUBSCRIBE</button></p>
        </form>
     <?php
  }
?>
  
</div>
</div>

 <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/cplusplus.jpg" alt="Denim Jeans" style="width:100%">
  
 
  <p>Learn C++ programing</p>
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribecplus WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <small class="alert alert-success">Subscribed</small>
    <form action="cplustutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
    <?php
  }else {
     
     ?>
      <p class="price">$100</p>
      <form action="cplusbuy.php" method="POST">
        <p><button type="submit"  name="submit">SUBSCRIBE</button></p>
        </form>
     <?php
  }
?>
  
</div>
</div>

 <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/python programing.jpg" alt="Denim Jeans" style="width:100%">
  
  
  <p>Learn python programing</p>
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribepython WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <small class="alert alert-success">Subscribed</small>
    <form action="pythontutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
    <?php
  }else {
     
     ?>
     <p class="price">$150</p>
      <form action="pythonbuy.php" method="POST">
        <p><button type="submit"  name="submit">SUBSCRIBE</button></p>
        </form>
     <?php
  }
?>
  
</div>
</div>

 <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/javaprograming.jpg" alt="Denim Jeans" style="width:100%">
  
 
  <p>Learn Java programing</p>
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribejava WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <small class="alert alert-success">Subscribed</small>
    <form action="ctutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
    <?php
  }else {
     
     ?>
      <p class="price">$120</p>
      <form action="javabuy.php" method="POST">
        <p><button type="submit"  name="submit">SUBSCRIBE</button></p>
        </form>
     <?php
  }
?>
  
</div>
</div>










</section>
<section class="py-5">
  

<div class="container-fluid">
  <div class="row">
 <div class="col-lg-2 col-md-1 col-12">
      
    </div>
 <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/Html5.jpg" alt="Denim Jeans" style="width:100%">
  
  
  <p>Learn HTML 5</p>
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribehtml WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <small class="alert alert-success">Subscribed</small>
    <form action="htmltutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
    <?php
  }else {
     
     ?>
     <p class="price">$60</p>
      <form action="buyhtml.php" method="POST">
        <p><button type="submit"  name="submit">SUBSCRIBE</button></p>
        </form>
     <?php
  }
?>
  
</div>
</div>

 <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/php.jpg" alt="Denim Jeans" style="width:100%">
  
  
  <p>Learn Php programing</p>
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribephp WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <small class="alert alert-success">Subscribed</small>
    <form action="phptutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
    <?php
  }else {
     
     ?>
     <p class="price">$110</p>
      <form action="buyphp.php" method="POST">
        <p><button type="submit"  name="submit">SUBSCRIBE</button></p>
        </form>
     <?php
  }
?>
  
</div>
</div>

 <div class="col-lg-2 col-md-1 col-12">

<div class="card">
  <img src="image/course/javascript.jpg" alt="Denim Jeans" style="width:100%">
  
  
  <p>Learn Java script programing</p>
 
 <?php

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
    ?>
    <?php      

  $q = "SELECT * FROM subscribejs WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    
    ?>
    <small class="alert alert-success">Subscribed</small>
    <form action="jstutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>
    <?php
  }else {
     
     ?>
     <p class="price">$200</p>
      <form action="buyjs.php" method="POST">
        <p><button type="submit"  name="submit">SUBSCRIBE</button></p>
        </form>
     <?php
  }
?>
  
</div>
</div>






</section>

<hr>














<section class="py-5">
  
</section>

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
