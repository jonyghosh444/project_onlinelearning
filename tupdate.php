<?php

session_start();

$conn = mysqli_connect('localhost','root','1234');

mysqli_select_db($conn,'tutorreg');



if (isset($_POST['Update'])) {
	
		$newimage      =	$_FILES['userimage'];
		$newfirstname  =	$_POST['first'];
		$newlastname   =	$_POST['last'];
		$newage        =	$_POST['age'];
		$newemail      =	$_POST['email'];

		if( !empty($newfirstname) && !empty($newlastname) && !empty($newage)   && !empty($newemail) ){

						


						$imagename    = $newimage ['name'];
						$fileType     = $newimage ['type'];
						$fileSize     = $newimage ['size'];
						$fileTmpName  = $newimage ['tmp_name'];
						$fileError    = $newimage ['error'];



						$fileData = explode('/',$fileType);
						$fileExtension =$fileData[count($fileData)-1];




						if ($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg' ) {
							
								if ($fileSize < 1000000) {
									$fileNewname = "image/user image/Tutor/".$imagename;
									$uploaded = move_uploaded_file($fileTmpName,$fileNewname);

									if ($uploaded) {
										
										$loggedinuser = $_SESSION['username'];
										$sql = "UPDATE tutorinfo SET  firstname = '$newfirstname' , lastname =  '$newlastname' , age = '$newage' , email = '$newemail', image = '$imagename'  WHERE name = '$loggedinuser'";


										$result = mysqli_query($conn,$sql);

										header('location:updatetutorprofile.php?success=Profileupdated');
										exit;
										
									}



									
								}else{

									header('location:updatetutorprofile.php?error=InvalidFilesize');
										exit;


								}
							


						}else{


										header('location:updatetutorprofile.php?error=InvalidFileType');
										exit;





						}


						





		}else{

			header('location:updatetutorprofile.php?error=emptyUserdata');
			exit;


		}







		

}












?>