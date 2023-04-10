<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: loginClone.php?error=Email Address is required");
	    exit();
	}else if(empty($pass)){
        header("Location: loginClone.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE gmail='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['gmail'] === $email && $row['password'] === $pass) {
            	$_SESSION['gmail'] = $row['gmail'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: systemcrud/index.php");
		        exit();
            }else{
				header("Location: loginClone.php?error=Incorect Email Address or password");
		        exit();
			}
		}else{
			header("Location: loginClone.php?error=Incorect Email Address or password");
	        exit();
		}
	}
	
}else{
	header("Location: loginClone.php");
	exit();
}