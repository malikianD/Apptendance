<?php
    session_start();
    require 'database/dbconnect.db.php';    
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
            
                <h2>Courses <?php echo $_SESSION['username'] . ""; ?></h2>
                
                <?php
                
                $family_name = $_SESSION['last'];
                
                //$result = $conn->prepare("SELECT crn, coursename FROM courses");
                
                // this will grab the courses taught teacher via last name of user
                $result = $conn->prepare("SELECT * FROM courses WHERE teacher='$family_name'");
                $result->execute();

                while ($row = $result->fetch(PDO::FETCH_ASSOC))
                {
                $crn = $row['crn'];
                $coursename = $row['coursename'];
        
                //echo $crn . " " . $coursename ."<br>"; 
                
                //echo '<input type = "checkbox" value = "' . $coursename . '" />' . $coursename .  "<br>";
                    
                  echo '<button type="button" name = " '.$coursename.'">' . $coursename . '</button><br>';
                }
                
                
                ?>
                
                
                
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
            <p>Name <?php echo $family_name; ?></p>
        
        
        </body>
        
</html>