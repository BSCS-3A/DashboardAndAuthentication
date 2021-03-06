<?php 
session_start();

if (isset($_SESSION['student_id']) && isset($_SESSION['student_username'])) {

 ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="../js/jscountdown.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style_sd.css">
<link rel="icon" href="../img/buceils-logo.png" type="image/png"> 
	<title>BUCEILS Student Dashboard</title>
</head>
<body>
	<nav>
		<img class="logo-pic" src="../img/buceils-logo.png">
		<div class="logo"><h1>B U C E I L S</h1><p>ONLINE VOTING SYSTEM</p></div>
		<label for="btn" class="icon"><span class="fa fa-bars"></span></label>
		<input type="checkbox" id="btn">
		<ul>
			<li>
				<label for="btn-1" class="show">VOTE</label>
				<a class="topnav" href="#">VOTE</a>
				<input type="checkbox" id="btn-1">
				<ul>
					<li><a href="#">VOTE NOW</a></li>
					<li><a href="#">RECEIPT</a></li>
				</ul>
			</li>
			<li>
				<label for="btn-2" class="show">ABOUT</label>
				<a class="topnav" href="#">ABOUT</a>
				<input type="checkbox" id="btn-2">
				<ul>
					<li><a href="ElectionProcess.php">ELECTION PROCESS</a></li>
					<li><a href="#">ARCHIVE</a></li>
				</ul>
			</li>
			<li>
				<label for="btn-3" class="show">CANDIDATES</label>
				<a class="topnav" href="#">CANDIDATES</a>
				<input type="checkbox" id="btn-3">
				<ul>
					<li><a href="#">VIEW INFO</a></li>
				</ul>
			</li>
			<li>
				<label for="btn-4" class="show">CHAT US</label>
				<a class="topnav" href="#">CHAT US</a>
			</li>
			<li>
				<label for="btn-5" class="show"><?php echo $_SESSION['student_name']; ?></label>
				<a class="user" href="#"><img class="user-profile" src="../img/user.png"></a>
				<input type="checkbox" id="btn-5">
				<ul>
					<li><a href="#"><?php echo $_SESSION['student_name']; ?></a></li>
					<li><a href="Logout.php">LOGOUT</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<section class="welcome-banner">
        <article class="welcome-text">
            <p>WELCOME TO THE OFFICIAL</p>
            <h1>ONLINE VOTING SYSTEM</h1>
            <p>BICOL UNIVERSITY COLLEGE OF EDUCATION<br>
                INTEGRATED LABORATORY SCHOOL-HIGH SCHOOL DEPT.</p>
        </article>
    </section>

    <div class="container">
        <h1 id="headline">ELECTION COUNTDOWN</h1>
        <div id="countdown">
            <ul>
                <li class="cd"><span class="cdspan" id="days">0</span>days</li>
                <li class="cd"><span class="cdspan" id="hours">0</span>Hours</li>
                <li class="cd"><span class="cdspan" id="minutes">0</span>Minutes</li>
                <li class="cd"><span class="cdspan" id="seconds">0</span>Seconds</li>
            </ul>
        </div>
    </div>

	<div class="footer">
  		<p>BS COMPUTER SCIENCE 3A © 2021</p>
	</div>
</body>
</html>

 <?php 
}else{
     header("Location: StudentLogin.php");
     exit();
}
 ?>