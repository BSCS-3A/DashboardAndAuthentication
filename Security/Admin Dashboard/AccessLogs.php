<?php
session_start();
include("db_conn.php");
if (isset($_SESSION['admin_id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<head><title>Welcome to Dashboard</title></head>
<body>
    Welcome! <?php echo $_SESSION['admin_fname'].' '.$_SESSION['admin_lname'].'<br>'; ?>
    <table width="50%" height="15%" border="1">
    <tbody>
     <tr >
    <td><center>Activity No.</center></td><td><center>Name</center></td><td><center>Action</center></td><td><center>Date</center></td><td><center>Time</center></td>
    </tr>
    <?php
    // $res = mysqli_query($mysqli, "SELECT * FROM `activity_log` WHERE activity_description='Login' OR activity_description='Logout'");
    $res = mysqli_query($conn, "SELECT * FROM activity_log INNER JOIN admin ON activity_log.admin_id=admin.admin_id  WHERE activity_description='Login' OR activity_description='Logout'"); //query and join activity log and admin
     while($result = mysqli_fetch_array($res)){
         echo "<tr>";
         echo "<td>"."<center>".$result['activity_log_id']."</center>"."</td>";
         echo "<td>"."<center>".$result['firstname']." ".$result['lastname']."</center>"."</td>";
         echo "<td>"."<center>".$result['activity_description']."</center>"."</td>";
         echo "<td>"."<center>".$result['act_date']."</center>"."</td>"; 
         echo "<td>"."<center>".date( 'g:i A', strtotime($result['act_time']))."</center>"."</td>";
     }
    ?>
    </tbody>
     </table>
    <a href="AdminDashboard.php">Go to Dashboard</a> <!-- page1-->
    <a href="Logout.php">Log Out</a> <!-- logout through href-->
    <form action="" method="POST"><input type="submit" name="logOutbutton" value="Log Out"> </form> <!-- logout through button-->


</body>

    </html>

    <?php
}else{
    header("Location: ..\Login UI v2\html\AdminLogin.php");
     exit();
}
 ?>
