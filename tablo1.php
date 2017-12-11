<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
<?php $tabl= array();
 $tabl[1][1]="";
 $tabl[2][2]="";
 $tabl[3][3]="";
 $tabl[4][4]="";
 $tabl[5][5]="";
 $tabl[6][6]="";
 $tabl[7][7]="";
 $tabl[8][8]="";
 $tabl[9][9]="";
 $tabl[10][10]="";

?>





<table border ="1">
  <?php
for ($i=0; $i < 10; $i++) {
    echo "<tr>";
    for ($j=0; $j <10 ; $j++) {
        if (($i==0 AND $j==0)||($i==1 AND $j==1)||($i==2 AND $j==2)||($i==3 AND $j==3) ||($i==4 AND $j==4)||($i==5 AND $j==5)||($i==6 AND $j==6)||($i==7 AND $j==7)||($i==8 AND $j==8)||($i==9 AND $j==9)){
            echo "<td style='background-color:yellow;'></td>";
        }
        elseif (($i==0 AND $j==9)||($i==1 AND $j==8)||($i==2 AND $j==7) ||($i==3 AND $j==6)||($i==4 AND $j==5)||($i==5 AND $j==4)||($i==6 AND $j==3)||($i==7 AND $j==2)||($i==8 AND $j==1)||($i==9 AND $j==0)) {
            echo "<td style='background-color: blue;'></td>";
        }
        else {
            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
        }
    }
}

?>
<?php

?>

</table>
    </body>
</html>