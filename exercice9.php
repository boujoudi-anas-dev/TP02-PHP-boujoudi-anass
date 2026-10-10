```php
<?php

$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nbValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = "";

foreach ($notes as $nom => $note) {
    $somme += $note;

    if ($note >= 10) {
        $nbValides++;
    }

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

$moyenne = $somme / count($notes);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Notes</title>
</head>
<body>

    <h1>Résultats de la classe</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Résultat</th>
        </tr>

        <?php foreach ($notes as $nom => $note) { ?>
            <tr>
                <td><?= $nom ?></td>
                <td><?= $note ?></td>
                <td>
                    <?php
                    if ($note >= 10) {
                        echo "Validé";
                    } else {
                        echo "Non validé";
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>

    </table>

    <h2>Statistiques de la classe</h2>

    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= $moyenne ?></p>
    <p>Nombre d'étudiants ayant validé : <?= $nbValides ?></p>
    <p>Meilleur étudiant : <?= $meilleurEtudiant ?></p>
    <p>Meilleure note : <?= $meilleureNote ?></p>

    <p><a href="index.php">accueil</a></p>
</body>
</html>
