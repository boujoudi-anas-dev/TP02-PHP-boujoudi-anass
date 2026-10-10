<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4</title>
</head>
<body>

<?php

$entier = 42;
$chaine = "42";
$decimale = 15.8;
$vrai = true;
$faux = false;
$vide = null;

echo "<h2> types de variable  </h2>";

echo "<pre>";

var_dump($entier);
var_dump($chaine);      
var_dump($decimale);
var_dump($vrai);
var_dump($faux);    
var_dump($vide);

echo "</pre>";

$chaineEntier = (int) $chaine;
$decimaleEntier = (int) $decimale;
$emtierchaine = (string) $entier;

echo "<h2> conversion de variable  </h2>";

echo "<pre>";

echo " 42 entier :";
var_dump($chaineEntier);

echo " 15.8 décimale :";
var_dump($decimaleEntier);

echo " 42 chaîne :";
var_dump($emtierchaine);

echo "</pre>";


echo "<h2> conversion en booléen  </h2>";

$valeur1 = (bool) 0;
$valeur2 = (bool) "0";
$valeur3 = (bool) "PHP";
$valeur4 = (bool) [];

echo "<pre>";

echo " 0:";
var_dump($valeur1);

echo " \"0\":";
var_dump($valeur2);

echo " \"PHP\":";
var_dump($valeur3);

echo " [] tableau vide :";
var_dump($valeur4);

echo "</pre>";
?>
<p><a href="index.php">accueil</a></p>



</body>
</html>