<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exercice 2 variable et concatination </h1>
    <?php 
    $nom = "alice";
    $prenom = "pato";
    $age = 20;
    $formation = "devlopment web";
    $phrase="je m'appelle $prenom . "". $nom . "" ,et j'ai  " . $age . " ans. Je suis en formation  ". $formation . ".";
    echo "<p> $phrase </p>";
    $note1= 15;
    $note2= 18;
    echo "<p> Note 1: $note1 </p>";
    echo "<p> Note 2: $note2 </p>";
    ?>
    <?php>
    echo "<p> la moyenne de mes notes est : " . ($note1 + $note2) / 2 . "</p>";
    ?> 
     <p><a href="index.php">accueil</a></p>   
</body>
</html>