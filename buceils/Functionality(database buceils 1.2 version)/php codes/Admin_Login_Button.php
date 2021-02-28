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
//get  data from the textbox
	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($username)) {
		header("Location: AdminLogin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: AdminLogin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admin WHERE username='$username' AND password='$pass'";

		$result = mysqli_query($conn, $sql);
//check if the inputs are correct if yes then go to the dashboard
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['admin_name'] = $row['admin_name'];
            	$_SESSION['admin_id'] = $row['admin_id'];
            	header("Location: AdminDashboard.php");
		        exit();
            }else{
				header("Location: AdminLogin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: AdminLogin.php?error=Incorect User name or password");
	        exit();
		}
	}

}else{
	header("Location: AdminLogin.php");
	exit();
}
