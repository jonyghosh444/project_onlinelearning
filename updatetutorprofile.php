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
	<title>Update profile</title>

	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/signup.css">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">


</head>
<body>

<div class="py-3">
	<a  style="color:Darkblue"  href="Tutorhome.php"> <b>Home<b></a>
</div>
		<div style="text-align: center" class="py-3">
		<h2 style="color:Darkblue"><b>Update your profile</b></h2>
		</div>
<hr>






<section >
	<div class="container-fluid">
<div class="Signup-box">
<div class="row">
	

<div class="col-lg-4 col-md-4 col-6 " >
</div>





	<div class="col-lg-4 col-md-4 col-6 Tutorsignup">
		


		<form action="tupdate.php" method="POST" enctype="multipart/form-data">

			<?php

		  		$session_user = $_SESSION['username'];
          		$user_data = "SELECT * FROM tutorinfo WHERE name='$session_user'";
          		
          		$gotResult = mysqli_query($conn,$user_data);

          		if ($gotResult) {
          			if (mysqli_num_rows($gotResult)>0) {
          				 while ($row = mysqli_fetch_array($gotResult)) {
          				 	
          				 	?>

          				 	<div class="form-group">
				<label>User Profile picture</label>
				<input type="file" name="userimage" class="form-control" value=" <?php echo $row['image'] ?>" >
		</div>	
	
		<div >
				<label>First Name</label>
				<input type="text" name="first" class="form-control"  value=" <?php echo $row['firstname'] ?>" >
		</div>
		<div >
				<label>Last Name</label>
				<input type="text" name="last" class="form-control" value=" <?php echo $row['lastname'] ?>" >
		</div>
		<div >
				<label>Age</label>
				<input type="number" name="age" class="form-control" value=" <?php echo $row['age'] ?>"  >
		</div>
	
		<div>
				<label>Email</label>
				<input type="text" name="email" class="form-control" value=" <?php echo $row['email'] ?>" >
		</div>

<hr>
					<?php

					if(isset($_GET['success'])){

						if($_GET['success'] == 'Profileupdated'){

							?>
								<small class="alert alert-success">Profile updated successfully</small>

								<hr>
							<?php




						}




					}


			if(isset($_GET['error'])){



			if($_GET['error'] == 'emptyUserdata'){

				?>
				<small class="alert alert-danger">Please provied all information</small>

				<hr>
				<?php



			}elseif($_GET['error'] == 'InvalidFileType'){


				?>
				<small class="alert alert-danger">Invalid File type only Image allowed</small>

				<hr>
				<?php

			}elseif ($_GET['error'] == 'InvalidFilesize') {

				?>
				<small class="alert alert-danger">Maximum 5mb Image size allowed</small>

				<hr>
				<?php
				
			}	

			}



		?>

	

		<div class="py-3" >
			<button type="submit"  name="Update" class="btn btn-primary">Update</button>
		</div>



          				 	<?php


          				 }
          			}
          		}


			?>


			

		</form>
	</div >
			
	
</div>

</div>

</div>

</div>

</section>







  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>