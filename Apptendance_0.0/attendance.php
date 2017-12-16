<?php
    require 'database/dbconnect.db.php';
    session_start();
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
        
            <title>Apptendance Attendance</title>
            <meta charset = "utf-8">
            <link rel="stylesheet" type = "text/css" href = "css/styles.css">
        </head>
        <body>
            
            <h2>Attendance</h2>
            
            <?php
                
                $result = $conn->prepare("SELECT firstname, lastname FROM student");
                $result->execute();
            
                while ($row = $result->fetch(PDO::FETCH_ASSOC))
                {
                    $f_name = $row['firstname'];
                    $l_name = $row['lastname'];
                    
                    
                    echo '<input type = "checkbox" value = "' . $l_name . '" />' . $l_name . ", " . $f_name .  "<br>";
                    
                }
            
            ?>
            
            <!--Need to generate a secret key with a one minute timer
                for the students to enter that they are in class-->
        
            <!-- This is where the list of students in the class
                 gets populated from the db, need to make each item
                 clickable, and save it to submit, -->
        
            <!-- This button takes the user to the forum -->
            <form action = "forum.php" method = "post">
                <button type = "submit" name = "button_to_forum">Forum</button>
            </form>
        
        </body>
</html>