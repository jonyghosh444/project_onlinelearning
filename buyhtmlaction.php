<?php 
session_start();
include("db.php");

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM studentsignup WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];
          




if (isset($_POST['submit'])) {
	
	

	$q = "INSERT INTO subscribehtml (id) VALUES ('$id')";

	if(mysqli_query($conn,$q)) {

		header('location:afterbuyhtml.php?success=Subscribed');
		exit;
		
	}
	else {
		
		$failed = "Something went wrong??";
	}

}
?>