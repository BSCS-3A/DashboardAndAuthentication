<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript" src="../js/loginLink.js"></script>
<link rel="icon" href="../img/buceils-logo.png" type="image/png">  
<title> BUCEILS Voting System </title>   
</head>    
<body>
        <div class="welcome-banner">
        <h2>ONLINE<br>VOTING SYSTEM</h2>
        <p>BICOL UNIVERSITY COLLEGE OF EDUCATION<br>INTEGRATED LABORATORY SCHOOL</p>
        </div>  
           
    <form action="Admin_Login_Button.php" method="post"> 
     
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        
        <div class="container">
            <img src="../img/manager.png" alt="Logo" title="Logo" width="138">
            <h1>SIGN IN AS</h1>
            
                <div class="select">
                    <select name="formal" onchange="javascript:handleSelect(this)">
                        <option value="AdminLogin">ADMINISTRATOR</option>
                        <option value="StudentLogin">STUDENT</option>
                    </select>
                </div>
                
            <input type="text" placeholder="Enter BU Email" name="username" required>  
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">LOG IN</button>   
        </div>   
    </form> 
</body>     
</html>  