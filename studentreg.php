<?php

session_start();


$conn = mysqli_connect('localhost','root','1234');

mysqli_select_db($conn,'tutorreg');

if(isset($_POST['submit'])){
$name = mysqli_real_escape_string ($conn,$_POST['user']);
$firstname = mysqli_real_escape_string ($conn,$_POST['first']);
$lastname = mysqli_real_escape_string ($conn,$_POST['last']) ;
$password = mysqli_real_escape_string ($conn,$_POST['password']);
$cpassword = mysqli_real_escape_string ($conn,$_POST['cpassword']);
$email = mysqli_real_escape_string ($conn,$_POST['email']);



$namequery = "select * from studentsignup where name='$name'";
$query = mysqli_query($conn,$namequery);

$namecount = mysqli_num_rows($query);

if($namecount>0){

	echo "Username already exist";
}else{
	if($password === $cpassword){

		$insertquery = "insert into studentsignup(name, firstname, lastname, password, cpassword, email) values('$name','$firstname','$lastname','$password','$cpassword','$email')";
		$iquery = mysqli_query($conn, $insertquery);
		echo "<script> window.location.assign('Studentlogin.php'); </script>";

	}else{
		echo "password are not matching";
	}
}




}
?>