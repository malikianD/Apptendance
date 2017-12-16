<?php
    session_start();
    require 'database/dbconnect.db.php';  

    $username = "";
    $password = "";

    $username_error = "";
    $password_error = "";

    $empty = "";

    $count = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // check if the username is empty
        if (empty($_POST["username"])) {
            $username_error = "Username Required";
        }
        else
        {
            $username = $_POST["username"];
            $count = 1;
        }
        
        
        // check if the password is empty
        if (empty($_POST["password"])) {
            $password_error = "Password Required";
        }
        else
        {
            $password = $_POST["password"];
            $count = 2;
        }
    
        
        if ($count == 2)
        {
            $result = $conn->prepare("SELECT * FROM teacher WHERE username='$username'");
            //$result = $conn->prepare("SELECT * FROM teacher");
            $result->execute();
            
            
            
            if ($result < 1)
            {
                $empty = "Not registered";
            }
            else{
            
            
            
                while ($row = $result->fetch(PDO::FETCH_ASSOC))
                {
                    if ($username == $row['username'])
                    {
                        $hashed_password_check = password_verify($password, $row['password']);
                        
                        if ($hashed_password_check == false)
                        {
                            $empty = "Incorrect Password";
                        }
                        else if ($hashed_password_check == true)
                        {
                            
                        $_SESSION['first'] = $row['firstname'];
                        $_SESSION['last'] = $row['lastname'];
                        $_SESSION['e_mail'] = $row['email'];
                        $_SESSION['username'] = $row['username'];
                            
                            header("Location: user_account_teacher.php");
                        }
                        
                    }
                    
                }
            
             
            } 
            
        }
    }





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
                
                <form method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    
                    <input type = "text" name = "username" placeholder="Username">
                    <span> <?php echo $username_error; ?></span><br><br>
                    
                    <input type = "password" name = "password" placeholder="Password">
                    <span> <?php echo $password_error; ?></span><br><br>
                    
                    <!--<p>Need to create an account <a href = ".php">click here</a></p> -->
                    
                    <button type = "submit" name = "submit_login">Login</button>
                         
                 </form>
                
                <!-- This form holds the code to go to the register.php page-->
                <form action = "register_student_or_teacher.php" method = "post">
                    <button type = "submit" name = "register_button">Register</button>
                </form>
            
                <p><span> hello <?php echo $empty; ?></span></p>
            </div>
        
        
        
        </body>


</html>