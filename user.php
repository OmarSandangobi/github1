<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formulaire user</title>
    </head>

    <body>
        <br />
        <h1>Mon User</h1><br />		      
        <form action="user.php" method="post">
            <br />Profil :<input type="text" name="log" placeholder="user" Required><br /><br />
            <br />Password :<input type="password" name="pass" placeholder="user" Required><br /><br />
            
            <div class="button">
                <button type="submit" name="conect" href="log2.php">Connexion</button>
            </div>
        </form>

        <?php
           
            extract($_POST);
            if(isset($conect)){
                if($log == "user" && $pass == "user" ){
                    header ('location: log2.php');
                    $_SESSION['$user'] = $user;
                }
                else{
                   echo"<h1>User Incorrect</h1>";
                }
            }    
            
        ?>

    </body>
</html> 