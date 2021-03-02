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
	$pass = md5(validate($_POST['password'])); //md5 hash

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
            	$_SESSION['admin_fname'] = $row['firstname'];
				$_SESSION['admin_lname'] = $row['lastname'];
            	$_SESSION['admin_id'] = $row['admin_id'];
				$admin_id = $row['admin_id'];
				mysqli_query($conn, "INSERT INTO activity_log(admin_id,activity_description,act_date,act_time) VALUES('$admin_id','Login',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");
            	header("Location: ..\..\Admin Dashboard\AdminDashboard.php");
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
	header("Location: ..\Login UI v2\html\AdminLogin.php");
	exit();
}
