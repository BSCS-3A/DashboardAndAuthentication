<?php 
session_start();
include "db_conn.php";
$admin_id = $_SESSION['admin_id'];
mysqli_query($conn, "INSERT INTO activity_log(admin_id,activity_description,act_date,act_time) VALUES($admin_id,'Logout',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");
session_unset();
session_destroy();

header("Location: ..\Login UI v2\html\AdminLogin.php");