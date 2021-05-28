<?php
session_start();
          
$conn = mysqli_connect('localhost','root','1234');

mysqli_select_db($conn,'tutorreg');

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          
          

     
     if (isset($_POST['submit'])) {
  
  

  $q = "SELECT * FROM buy WHERE id='$id'";
  $query = mysqli_query($conn,$q);

$num = mysqli_num_rows($query);

  if($num) {

    
    echo"id found";
    
  }
  else {
     echo "id not found";
  }
}
      ?>