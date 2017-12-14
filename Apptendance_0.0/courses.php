<?php
    require 'database/dbconnect.db.php';
    session_start();
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
        
            <title>Apptendance Courses</title>
            <meta charset = "utf-8">
            <link rel="stylesheet" type = "text/css" href = "css/styles.css">
            
        </head>
        <body>
            
            <div>
            
                <h2>Courses</h2>
                
                <!--This is where the list of courses needs to be populated 
                    based on the user that is logged in, for now it is just 
                    a button-->
                
                <form action = "attendance.php" method = "post">
                    <button type = "submit" name = "button_to_attendance">Role</button>
                </form>
                
                <!-- This button takes the user to the forum -->
            <form action = "forum.php" method = "post">
                <button type = "submit" name = "button_to_forum">Forum</button>
            </form>
                
                
            </div>
        
        
        </body>
        
</html>