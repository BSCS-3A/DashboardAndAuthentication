<?php 
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_username'])) {

 ?>
 
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="icon" href="assets/img/buceils-logo.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="assets/js/countdown.js"></script>
    <title> BUCEILS Voting System </title>
</head>

<body>
    <nav>
        <img class="logo-pic" src="assets/img/buceils-logo.png">
        <div class="logo">
            <h2>BUCEILS HS</h2>
            <h3>ONLINE VOTING SYSTEM</h3>
        </div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li>
                <a href="#">ACCOUNTS</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
            </li>
            <li>
                <!-- <label for="btn-1" class="show">Features +</label> -->
                <a href="#">ELECTION</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><a href="#">Archive</a></li>
                    <li><a href="#">Vote Status</a></li>
                    <li><a href="#">Vote Result</a>
                        <ul>
                            <li><a href="#">Make Report</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Configuration</a>
                    
                </ul>
            </li>
            <li>
                <!-- <label for="btn-2" class="show">Services +</label> -->
                <a href="#">CANDIDATES</a>
                <input type="checkbox" id="btn-2">
            </li>
            <li>
                <a href="#">LOGS</a>
                <input type="checkbox" id="btn-4">
                <ul>
                    <li><a href="#">Access Log</a></li>
                    <li><a href="#">Activity Log</a></li>
                    <li><a href="#">Vote Summary</a></li>
                </ul>
            </li>
            <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">MESSAGES</a></li>
            <!-- <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">LOGOUT</a></li> -->
            <li>
                <a class="user" href="#"><img class="user-profile" src="assets/img/user.png"></a>
                <ul>
                    <li><a class="username" href="#"><?php echo $_SESSION['admin_name']; ?></a></li>
                    <li class="logout">
                        <span class="fa fa-sign-out"></span><a href="Logout.php">LOGOUT</a></span>
                    </li>
                </ul>
            </li>
        </ul>
 
              
        <!--end of list-->
    </nav>
    <section>
        <!--Left Content-->
        <article>
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
                <li><span id="days">0</span>days</li>
                <li><span id="hours">0</span>Hours</li>
                <li><span id="minutes">0</span>Minutes</li>
                <li><span id="seconds">0</span>Seconds</li>
            </ul>
        </div>
    </div>

    <div class="footer">
        <p>BS COMPUTER SCIENCE 3A © 2021</p>
    </div>
    

    <script>
        $('.icon').click(function () {
            $('span').toggleClass("cancel");
        });
    </script>

</body>

</html>

 <?php 
}else{
     header("Location: AdminLogin.php");
     exit();
}
 ?>