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
            
                <!-- This prints out user name, make sure user logged int-->
                <h2>Courses <?php echo $_SESSION['username'] . ""; ?></h2>
                
                <!-- This php will generate a list of buttons of the courses that the user has-->
                <?php
                
                    $family_name = $_SESSION['last'];
                    $test_array = array();
                
                    //$result = $conn->prepare("SELECT crn, coursename FROM courses");
                
                    // this will grab the courses taught teacher via last name of user
                    $result = $conn->prepare("SELECT * FROM courses WHERE teacher='$family_name'");
                    $result->execute();
                    $id = 0;

                        while ($row = $result->fetch(PDO::FETCH_ASSOC))
                        {
                            $crn = $row['crn'];
                            $coursename = $row['coursename'];
                            
                            
                            array_push($test_array, $coursename);
                            
                            // This should create a button for each course in the user, with the name and value
                            echo '<button type="submit" class="button" name = " '.$coursename.'" value = "'.$coursename.'"  onclick="myFunction('.$id.')" id = "'.$id++.'" >' . $coursename . '</button><br>';
                            
                            //array_push($test_array, $coursename);
                            
                            /*echo '<form method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 
                            <input type="submit" name = "'.$coursename.'" value="'.$coursename. " " .$crn.'">
                            </form><br>';*/
                            
                        }
                ?>
                
               <!-- PHP try button click of course and generate list of people -->
               
                    
                 <?php  
                    
                //$arr_length = count($test_array);
                
                
                    
                    //for ($x = 0; $x < $arr_length; $x++)
                    //{
                      //  echo $test_array[$x];
                    
                      //  if (isset($x))
                      //  {
                      //  $test = "Success";
                      //  }
                    
                   // }
                
                    //if (isset($_POST["name"]) == )    {
                        
                        //$crn2 = $_POST['crn'];
                        
                        //$test = "Test";
                        
                        //$result = $conn->prepare("SELECT * FROM student WHERE course='$crn2'")
                          //  $result->execute();
                            
                           // while ($row = $result->fetch(PDO::FETCH_ASSOC))
                          //  {
                             //   $f_name = $row['firstname'];
                             ///   $l_name = $row['lastname'];
                                
                              //  echo '<input type = "checkbox" value = "' . $l_name . '" />' . $l_name . ", " . $f_name .  "<br>";
                            //}
                        
                    //}
                    //}
                
               // ?>
                
                <script>
                       // document.getElementById("0").innerHTML = "Changed";
                        //document.getElementById("1").innerHTML = "Changed again";
                    
                    function myFunction(x){
                        
                        var value = x; 
                        <?php ?>
                        
                        
                        
                        document.getElementById("demo").innerHTML = value;
                        
                    }
                
                </script>
                
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
            
            <!-- This is for testing -->
            <p>Name <?php echo $family_name; ?></p>
            <p> Testing <?php print_r($test_array); ?></p>
            <p><?php echo $arr_length; ?></p>
            <p id = "demo"></p>
            
        
        
        </body>
        
</html>