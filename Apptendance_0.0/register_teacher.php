<?php
    require 'database/dbconnect.db.php';
    session_start();
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
        
            <title>Apptendance Teacher</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type = "text/css" href = "css/styles.css">
            
        </head>
        <body>
        
            
            <h2>Create Teacher Account</h2>
            <div>
            
                <form action = "user_account.php" method = "post">
                
                <input type = "text" name = "f_name" placeholder="FirstName"><br>
                <input type = "text" name = "l_name" placeholder="LastName"><br>
                <input type = "text" name = "e_mail" placeholder="E-mail"><br>
                 <input type = "text" name = "user_name" placeholder="Username"><br>
                <input type = "password" name = "pass_word" placeholder="Password"><br>
                    
                <button type = "submit" name = "submit_new_user">Sign up</button>
                                      
                </form>
            
            
            </div>
            
        </body>
</html>