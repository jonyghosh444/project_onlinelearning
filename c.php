<?php 
session_start();
include("db.php");

          $session_user = $_SESSION['username'];
          $user_data = mysqli_query($conn,"SELECT * FROM tutorinfo WHERE name='$session_user'");
          $user_row = mysqli_fetch_assoc($user_data);
          $id= $user_row['id'];




if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$tittle = mysqli_real_escape_string ($conn,$_POST['tittle']);
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$file_destination = "upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO c (video,tittle,id) VALUES ('$file_name','$tittle','$id')";

	if(mysqli_query($conn,$q)) {

		$success = "Video uploaded successfully.";
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>C</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <link rel="stylesheet" type="text/css" href="css/upload.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	
	
</head>
<body>

<div>
	<a class="navbar-brand" href="Tutorhome.php">Home</a>
</div>


<section class="py-5 my-5">
	<div class="container mt-3">
		
				
				<div class="col-lg-5 m-auto videoupload">
				<form action="c.php" method="post" enctype="multipart/form-data">


					<div class="form-group">
				<label>Add a tittle</label>
				<input type="text" name="tittle" class="form-control" required>
				</div>

					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php } ?>
						
					<input type="submit" name="upload" value="Upload" class="btn btn-success ml-3">
				</form>
				</div>
	</div>

</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>
</html>