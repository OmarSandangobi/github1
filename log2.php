<?php
    $date = date("d-m-y");
    $heure = date("h:i");
    print("nous somme le $date ---- il est $heure a DAKAR. <br />");
    echo '<br /> <h3>Bienvenue a mon formulaire:</h3> <br />'; 
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<body>
    <a href="formulaire.php">aller sur formulaire</a><br /><br />
    <a href="url_01.php">aller sur url</a><br /><br />
<div class="button">
    <a href="user.php" > <button type="submit" name="conec">DECONNECT</button></a>
</div>
</body>
</html>