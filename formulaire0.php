<?php
    $date = date("d-m-y");
    $heure = date("h-i");
    print("nous somme le $date ---- il est $heure a DAKAR.<br />  <br />");
    echo 'Vous vous appele     =====> '  . $_POST['nom'].'<br /> ';
    echo 'Et vous etes     =====>'  .  $_POST['civilite'].'<br /> ';
    echo 'vous pratiqué     =====>'  . '<br /> '. $_POST['choix'] .'<br /> '.  $_POST['choixe'].'<br /> '.  $_POST['choixs'].'<br /> ';
    echo 'Et vous avez ecri   =====>'  .  $_POST['com'].'<br /> ';
    echo $_POST['Valider'];
   

?> 
<?php
    session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br /><br /><div class="button">
    <a href="formulaire.php" > <button type="submit" name="conec">Retour</button></a>
</div>
</body>
</html>