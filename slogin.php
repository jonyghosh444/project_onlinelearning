<?php

session_start();



$conn = mysqli_connect('localhost','root','1234');

mysqli_select_db($conn,'tutorreg');

if(isset($_POST['submit'])){
$name = mysqli_real_escape_string ($conn,$_POST['user']);
$password = mysqli_real_escape_string ($conn,$_POST['password']);


$loginquery = "select * from studentsignup where name='$name' && password='$password'";
$query = mysqli_query($conn,$loginquery);

$num = mysqli_num_rows($query);

if($num == 1){

		$_SESSION['username'] = $name;
		echo "<script> window.location.assign('studenthomepage.php'); </script>";



}else{

	echo "<script> window.location.assign('Studentlogin.php'); </script>";
	
}




}
?>