<?php
    require 'database/dbconnect.db.php';
    session_start();
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
        
            <title>Apptendance</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type = "text/css" href = "css/styles.css">
            
        </head>
        
        <body>
            
            
            <div>
                <h1>Apptendance</h1>
                
                <form action = "user_account.php" method="POST">
                    
                    <input type = "text" name = "username" placeholder="Username">
                    <br><br>
                    
                    <input type = "password" name = "password" placeholder="Password">
                    <br><br>
                    
                    <!--<p>Need to create an account <a href = ".php">click here</a></p> -->
                    
                    <button type = "submit" name = "submit_login">Login</button>
                         
                 </form>
                
                <!-- This form holds the code to go to the register.php page-->
                <form action = "register.php" method = "post">
                    <button type = "submit" name = "register_button">Register</button>
                </form>
            
            
            </div>
        
        
        
        </body>


</html>