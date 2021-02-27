<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
//gets the input from the textbox in the AdminLogin.php
	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($username)) {
		header("Location: StudentLogin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: StudentLogin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM student WHERE student_username='$username' AND student_password='$pass'";

		$result = mysqli_query($conn, $sql);
//check if every inputs matched if yes go directly to the dashboard
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['student_username'] === $username && $row['student_password'] === $pass) {
            	$_SESSION['student_username'] = $row['student_username'];
            	$_SESSION['student_name'] = $row['student_name'];
            	$_SESSION['student_id'] = $row['student_id'];
            	header("Location: StudentDashboard.php");
		        exit();
            }else{
				header("Location: StudentLogin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: StudentLogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: StudentLogin.php");
	exit();
}