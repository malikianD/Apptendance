<?php
    require 'database/dbconnect.db.php';
    session_start();
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
        
            <title>Apptendance Student</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type = "text/css" href = "css/styles.css">
            
        </head>
        <body>
            
            <?php
            
                // define variables 
            $first_name = "";
            $last_name = "";
            $email_add = "";
            $userN = "";
            $psw = "";
            
            // define variables for the errors
            $first_name_error = "";
            $last_name_error = "";
            $email_add_error = "";
            $userN_error = "";
            $psw_error = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                // check if the first name field is empty and that it contains 
                // alphabetical characters
                if (empty($_POST["f_name"])) {
                    $first_name_error = "First name required";
                }
                else
                {
                    $first_name = test_input($_POST["f_name"]);
                    
                    if (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
                        $first_name_error = "Only letters are allowed";
                    }
                } 
                
                // check if the last name field is empty and that it contains 
                // alphabetical characters
                if (empty($_POST["l_name"])) {
                    $last_name_error = "Last name required";
                }
                else
                {
                    $last_name = test_input($_POST["l_name"]);
                    
                    if (!preg_match("/^[a-zA-Z]*$/", $last_name)) {
                        $last_name_error = "Only letters are allowed";
                    }
                }
                
                // check if the email address follows the correct guidelines
                if (empty($_POST["e_mail"])) {
                    $email_add_error = "Email is required";
                }
                else 
                {
                    $email_add = test_input($_POST["e_mail"]);
                    
                    if (!filter_var($email_add, FILTER_VALIDATE_EMAIL)) {
                        $email_add_error = "Invalid email format";
                    }
                }
                
                // check the username 
                if (empty($_POST["user_name"])) {
                    $userN_error = "Username required";
                }
                else
                {
                    $userN = test_input($_POST["user_name"]);
                }
                
            }
            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>    
            
            <h2>Create Student Account</h2>
            <div>
            
                <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                
                <input type = "text" name = "f_name" placeholder="FirstName"><span> <?php echo $first_name_error; ?></span><br>
                    
                    
                <input type = "text" name = "l_name" placeholder="LastName"><span> <?php echo $last_name_error; ?></span><br>
                    
                <input type = "text" name = "e_mail" placeholder="E-mail"><span> <?php echo $email_add_error; ?></span><br>
                    
                <input type = "text" name = "user_name" placeholder="Username"><span> <?php echo $userN_error; ?></span><br>
                    
                <input type = "password" name = "pass_word" placeholder="Password"><br>
                    
                <input type = "password" name = "renter_pass_word" placeholder= "Re-enter Password"><br>
                    
                <button type = "submit" name = "submit_new_user">Sign up</button>
                                      
                </form>
                
                <?php 
                    echo "<h2>Input<h2>";
                    echo "<br>";
                    echo $first_name;
                echo "<br>";
                    echo $last_name;
                echo "<br>";
                    echo $email_add;
                echo "<br>";
                    echo $userN;
                echo "<br>";
                    echo $psw;
                
                ?>
            
            
            </div>
            
        </body>
</html>