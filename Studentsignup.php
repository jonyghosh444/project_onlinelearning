<!DOCTYPE html>
<html>
<head>
	<title>Student Signup</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">




</head>
<body>


<section class="my-5 py-5">
	<div class="container-fluid">
<div class="Signup-box">
<div class="row">
	

<div class="col-lg-3 col-md-4 col-6 " >
</div>




	<div class="col-lg-4 col-md-4 col-6 Tutorsignup">
		

		<div class="py-5">
		<h2 style="color:Darkblue"><b>Signup here</b></h2>
		</div>
		<form action="studentreg.php" method="POST">
				<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
		</div>	
		<div >
				<label>First Name</label>
				<input type="text" name="first" class="form-control" required>
		</div>
		<div >
				<label>Last Name</label>
				<input type="text" name="last" class="form-control" required>
		</div>



		<div class="form-group">
			<label>password</label>
			<input type="password" name="password" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Confirm password</label>
			<input type="password" name="cpassword" class="form-control" required>
		</div>
		<div class>
				<label>Email</label>
				<input type="text" name="email" class="form-control" required>
		</div>
		<div class="py-5">
			<button type="submit"  name="submit" class="btn btn-primary">Signup</button>
		</div>

		</form>
	</div >
			<div class="col-lg-4 col-md-4 col-6">
				<img src="image/image/onlinestudentsignup.jpg" class="img-fluid">
		    </div>
	
</div>

</div>

</div>

</div>

</section>



















<footer  class="p-3 bg-dark text-white text-center" > WWW.Onlinelearningcentre.com</footer>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>