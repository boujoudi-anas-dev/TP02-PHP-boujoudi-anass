<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 8</title>
</head>
<body>
     <h2>partie1 : nombre pair</h2>
     <?php
     $nombre = 0: 

        while ($nombre <= 20) {
            if ($nombre  == 10) {
                echo "<strong> $nombre </strong> <br>";
            } else {
                echo "$nombre <br>";

            }
            $nombre += 2;

        }
     ?>
  
 <h2>partie2 : while et do while</h2>
 
     <?php
     $compteur = 5;
     $executionwhile = 0;

        while ($compteur < 5) {
            $executionwhile++;
            $compteur++;
        }
        echo "Le nombre d'itérations effectuées dans la boucle while est : $executionwhile";
        echo "<br>";

        $compteur = 5;
        $executiondowhile = 0;
        do {
            $executiondowhile++;
            $compteur++;
        } while ($compteur < 5);

        echo "Le nombre d'itérations effectuées dans la boucle do-while est : $executiondowhile";

     ?>

         <h2>partie3 :  continue et break</h2>
    <?php
    for ($compteur = 1; $compteur <= 10; $compteur++) {
        if ($compteur % 3 == 0) {
            continue; 
        }
        if ($compteur >= 16) {
            break; 
        }
        echo "Compteur : $compteur <br>";
    }
    ?>
</body>
</html>
