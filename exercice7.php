<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exrcice7</title>
</head>
<body>
    <h2></h2>table de multiplication</h2>

<?php

$nombre = 7;

for ($i = 1; $i <= 10; $i++)
    {
    $resultat = $nombre * $i;
    echo $nombre . "x" . $i . " = " . $resultat ;
    echo "<br>";
    }
?>
       <h2>pyramide </h2>

       <pre>
       <?php

       for ($i = 1; $i <= 5; $i++)
       {
        for ($j = 1; $j <= $i; $j++)
        {
            echo "*";
        }
        echo "<\n>";}
       ?>
<p><a href="index.php">accueil</a></p>

</body>
</html>