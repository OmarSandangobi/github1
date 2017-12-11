<html lang="fr">
<body>
    <h4 color="red">Mon Login</><br /><br />
    <div>
    <a href="login.php" > <button type="submit" name="conec">DECONNECT</button></a>
    </div><br /><br />
   
</body>
</html>
<?php
    $date = date("d-m-y");
    $heure = date("h:i");
    print("nous somme le $date ---- il est $heure a DAKAR. <br />");
    echo '<br /> <h3>Bienvenue a loginInfo:</h3> <br />'; 
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<body>
    
    <a href="tablo.php">aller sur tableau</a><br /><br />
    <a href="Calculatrice.php">aller sur calcul</a><br /><br />

</body>
</html>