<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formulaire Login</title>
    </head>

    <body>
    <h4 color="red">Mon Login</><br />
       
        <h1>Mon Login</h1><br />		      
        <form action="login.php" method="post">
            <br />Profil :<input type="text" name="log" placeholder="login" Required><br /><br />
            <br />Password :<input type="password" name="pass" placeholder="login" Required><br /><br />
            
            <div class="button">
                <button type="submit" name="conect" href="log1.php">Connexion</button>
            </div>
        </form>

        <?php
           
            extract($_POST);
            if(isset($conect)){
                if($log == "admin" && $pass == "admin" ){
                    header ('location: log1.php');
                    $_SESSION['$login'] = $login;
                }
                else{
                   echo"<h1>Login Incorrect</h1>";
                }
            }    
            
        ?>

    </body>
</html> 