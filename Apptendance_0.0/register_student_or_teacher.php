<?php
    require 'database/dbconnect.db.php';
    session_start();
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
        
            <title>Apptendance Student or Teacher</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type = "text/css" href = "css/styles.css">
            
        </head>
        <body>
            
            <div>
                
                <h2>Which kind of user are you...</h2>
            
            <!-- This form and button will proceed to the student create
                acccount page-->
            <form action ="register_student.php" method = "post">
                    
                <button type = "submit" name ="register_student">Student</button>
                
            </form>
                
            <!-- This form and button will proceed to the teacher create 
                account page-->
            <form action = "register_teacher.php" method = "post">
                
                <button type = "submit" name = "register_teacher.php">Teacher</button>
                
            </form>
            
            </div>
        
        
        </body>
</html>