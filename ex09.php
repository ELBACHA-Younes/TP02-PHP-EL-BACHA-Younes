<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex09</title>
</head>
<body>

<h1>Notes des étudiants</h1>

<?php

$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nombreValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

?>

<table border="1" cellpadding="11">
    <tr>
        <th>Étudiant</th>
        <th>Note</th>
        <th>Résultat</th>
    </tr>

<?php

foreach ($notes as $etudiant => $note) {

    $somme += $note;

    if ($note >= 10) {
        $resultat = "Validé";
        $nombreValides++;
    } else {
        $resultat = "Non validé";
    }

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }

    echo "<tr>";
    echo "<td>" . $etudiant . "</td>";
    echo "<td>" . $note . "</td>";
    echo "<td>" . $resultat . "</td>";
    echo "</tr>";
}

$moyenne = $somme / count($notes);

?>

</table>

<p>Somme des notes : <?= $somme ?></p>
<p>Moyenne de la classe : <?= $moyenne ?></p>
<p>Nombre d'étudiants validés : <?= $nombreValides ?></p>
<p>
    Meilleure note :
    <?= $meilleurEtudiant ?> avec <?= $meilleureNote ?>/20
</p>

</body>
</html>