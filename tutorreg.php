<?php

session_start();



$con = mysqli_connect('localhost','root','1234');

mysqli_select_db($con,'tutorreg');

if(isset($_POST['submit'])){
$name = mysqli_real_escape_string ($con,$_POST['user']);
$firstname = mysqli_real_escape_string ($con,$_POST['first']);
$lastname = mysqli_real_escape_string ($con,$_POST['last']) ;
$password = mysqli_real_escape_string ($con,$_POST['password']);
$cpassword = mysqli_real_escape_string ($con,$_POST['cpassword']);
$email = mysqli_real_escape_string ($con,$_POST['email']);



$namequery = "select * from tutorinfo where name='$name'";
$query = mysqli_query($con,$namequery);

$namecount = mysqli_num_rows($query);

if($namecount>0){

	echo "Username already exist";
}else{
	if($password === $cpassword){

		$insertquery = "insert into tutorinfo(name, firstname, lastname, password, cpassword, email) values('$name','$firstname','$lastname','$password','$cpassword','$email')";
		$iquery = mysqli_query($con, $insertquery);
		 echo "<script> window.location.assign('Tutorlogin.php'); </script>";

	}else{
		echo "password are not matching";
	}
}




}
?>