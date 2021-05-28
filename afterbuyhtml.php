<?php

session_start();


$conn = mysqli_connect('localhost','root','1234');

mysqli_select_db($conn,'tutorreg');








?>


<!DOCTYPE html>
<html>
<head>
  <title>Purcess
    
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

    
     <li class="nav-item active">
        <a class="nav-link" href="tlogout.php">Logout</a> 

      </li>
    </ul>
   
  </div>
</nav>


  

<section class="py-5">
</section>
<section class="py-5">
  </section>

<section class="py-5">

<div class="card">


                 

          <div>
            <img src="image/course/Html5.jpg" alt="Denim Jeans" style="width:100%">
          </div>

     
  
<p class="py-1">Whether you are an experienced programmer or not, this website is intended for everyone who wishes to learn the Html 5.</p>



	<?php

					if(isset($_GET['success'])){

						if($_GET['success'] == 'Subscribed'){

							?>
								<small class="alert alert-success">Course SUBSCRIBED successfully</small>
<?php


}
}


?>



   <form action="htmltutorial.php" method="post">
      <p><button type="submit"  name="submit" class="btn btn-primary">Go to course</button></p>
   </form>

  </div>

</section>











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
