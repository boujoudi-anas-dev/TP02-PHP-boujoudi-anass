<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice6</title>
</head>
<body>
    
<?php

$numeroMois = int date ("m") ;

switch ($numeroMois) {
    case 1:
        echo "Janvier";
        break;
    case 2:
        echo "Février";
        break;
    case 3:
        echo "Mars";
        break;
    case 4:
        echo "Avril";
        break;
    case 5:
        echo "Mai";
        break;          
    case 6:
        echo "Juin";
        break;
    case 7:
        echo "Juillet";
        break;
    case 8:
        echo "Août";
        break;
    case 9:
        echo "Septembre";   
        break;
    case 10:
        echo "Octobre";
        break;
    case 11:
        echo "Novembre";
        break;
    case 12:
        echo "Décembre";
        break;
    default:
        echo " numéro de mois invalide";
}
?>
<p><a href="index.php">accueil</a></p>

</body>
</html>