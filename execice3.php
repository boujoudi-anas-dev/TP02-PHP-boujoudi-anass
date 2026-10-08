<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    const taux_tva = 20;
    define("devise", "MAD");

    $prixUnitaireHT = 60;
    $quantite = 3;

    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = ($totalHT * taux_tva) / 100;
    $totalTTC = $totalHT + $montantTVA;

    echo "<h2> Recapitulatif </h2>";
    echo " le prix unitaire HT est : " . $prixUnitaireHT . " " . devise 
    echo" <br>";

    echo " la quantite est : " . $quantite ;
    echo" <br>";

    echo " le totale HT est : " . $totalHT . " " . devise ;
    echo" <br>";

    echo "montant de la TVA est : " . $montantTVA . " " . devise ;
    echo" <br>";

    echo " le totale TTC est : " . $totalTTC . " " . devise ;
    echo" <br>";

    echo " frais de livraison:15 " . $totalTTC . " " . devise;

    if(define(TVAUX_TVA)){
        echo " le constanent TVAUX_TVA est existe ";

    }
    ?>
    

</body>
</html>