<?php
    session_start();
    require 'database/dbconnect.db.php';
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
        
            <title>Apptendance User Student</title>
            <meta charset = "utf-8">
            <link rel="stylesheet" type="text/css" href = "css/styles.css">
        </head>
        <body>
            
            <h2>Student User <?php echo $_SESSION['username'] . ""?>
                </h2>
            
            <!--This button takes the user to their courese -->
            <form action = "courses.php" method = "post">
                <button type ="submit" name ="button_to_course">Courses</button>
            </form>
            
            <!-- This button takes the user to the forum -->
            <form action = "forum.php" method = "post">
                <button type = "submit" name = "button_to_forum">Forum</button>
            </form>
        
        </body>
</html>