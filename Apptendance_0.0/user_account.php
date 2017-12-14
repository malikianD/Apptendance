<?php
    require 'database/dbconnect.db.php';
    session_start();
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
        
            <title>Apptendance User Page</title>
            <meta charset = "utf-8">
            <link rel="stylesheet" type = "text/css" href = "css/styles.css">
            
        </head>
        
        <body>
            
            <div>
                    <h2>Hello 
                <?php
                    $_SESSION['username'] = $_POST["username"];
                    echo   $_SESSION['username'] . "";
                        ?></h2>
            
            
            
            <!--This button takes the user to their courese -->
            <form action = "courses.php" method = "post">
                <button type ="submit" name ="button_to_course">Courses</button>
            </form>
            
            <!-- This button takes the user to the forum -->
            <form action = "forum.php" method = "post">
                <button type = "submit" name = "button_to_forum">Forum</button>
            </form>
                
            </div>
        
        </body>
</html>