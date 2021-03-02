<?php
 session_start();
 
 if (isset($_SESSION['admin_id']) && isset($_SESSION['username']))
    {
        header("Location: ..\..\Student Dashboard\StudentDashboard.php");
    }
?>
                

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="../js/loginLink.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="icon" href="../img/BUHS LOGO.png" type="image/png">  
<title> BUCEILS Voting System </title>   
</head>    
<body>
        <div class="welcome-banner">
        <h2>ONLINE</h2>
        <div class="logo-container">
        <img class="logos" src="../img/BU logo.png">
        <img class="logos" src="../img/BUHS LOGO.png">
        <img class="logos" src="../img/SSG LOGO.png">
        </div>
        <h2>VOTING SYSTEM</h2>
        <p>BICOL UNIVERSITY COLLEGE OF EDUCATION<br>INTEGRATED LABORATORY SCHOOL HIGH SCHOOL DEPT.</p>
        </div>

        <div class="logo-banner">
            <p class="banner-text">BUCEILS HS ONLINE VOTING SYSTEM</p>
            <img class="rlogo" src="../img/BU logo.png">
            <img class="rlogo" src="../img/BUHS LOGO.png">
            <img class="rlogo" src="../img/SSG LOGO.png">
        </div> 
     
    <form>  
        <div class="container">
            <img src="../img/student.png" alt="Logo" title="Logo" width="138">
            <h1>SIGN IN AS</h1>
                <div class="select">
                    <select name="formal" onchange="javascript:handleSelect(this)">
                        <option value="StudentLogin">STUDENT</option>
                        <option value="AdminLogin">ADMINISTRATOR</option>
                    </select>
                </div>
            <input type="text" placeholder="Enter BU Email" name="username" required>  
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">LOG IN</button>
        </div>   
    </form> 
</body>     
</html>  