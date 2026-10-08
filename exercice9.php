<?php
 $notes = [
"adam" => 10,
"amin" => 12,   
"sara" => 16,
"youssef" => 8,
"lina" => 14,]

$somme = 0;
nombrevalide = 0;
meilleurNote = 0;
meilleurEtudiant = "";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 9</title>
</head>
<body>
    <h2>resultats des etudiants</h2>
<table border="1">
    <tr>
        <th>Étudiant</th>
        <th>Note</th>
        <th>Résultat</th> 
    </tr>

    <?php foreach ($notes as $nom => $note): 
        <tr>
            <td><?php echo $nom; ?></td>
            <td><?php echo $note; ?></td>

            <td> 
            <?php
            if ($note >=10) 
                {echo"valide"
            $nombrevalidee++ ;}
            else{echo" non valide "}
            ?>
            </td>
        </tr>
        <?php $somme += $note;
        if ($note > $meilleurNote) {
            $meilleurNote = $note;
            $meilleurEtudiant = $nom;
        }
        ?>
        <?php endforeach; ?>
        </table>
    

        

    ?>




</table>

</body>
</html>