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
            
                <h2>Forum</h2>
                
                
                <form action ="" method = "post">
                    <input type = "text" name = "send_message" placeholder="Send Message...">
                </form>
                
                
                <form action = "user_account.php" method="post">
                    <button type = "submit" name ="button_to_user_account">User account</button>
                </form>
                
                
                
                <form action = "courses.php" method="post">
                    <button type = "submit" name ="register_button">Courses</button>
                </form>
            
            </div>
        
        </body>
</html>