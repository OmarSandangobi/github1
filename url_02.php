<?php
    $date = date("d-m-y");
    $heure = date("h-i");
    print("nous somme le $date ---- il est $heure a DAKAR.<br />  <br />");

    extract($_GET);
    echo"</table>";
    echo'
        <form method="get" action="url_01.php">
            code : <input type="number" name="code" value="'.$code.'" readonly/>
            nom : <input type="text" name="nom" value="" placeholder="'.$nom.'" required/>
            age : <input type="number" name="age" value="" placeholder="'.$age.'"required/>
                <input type="submit" name="Modifier" value="Modifier"/>
        </form>
    ';
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
    <br /><div class="button">
        <a href="url_01.php" > <button type="submit" name="conec">Retour</button></a>
    </div>
</body>
</html>