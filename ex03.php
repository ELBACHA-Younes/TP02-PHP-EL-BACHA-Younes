<?php

    const TAUX_TVA = 0.2;
    const DEVISE = "MAD";

    $prix_unitaire_ht = 60;
    $quantity = 3;

    $total_ht = $prix_unitaire_ht * $quantity;
    $montant_TVA = $total_ht * TAUX_TVA;
    $total_TTC = $total_ht + $montant_TVA;
    $total_TTC += 15;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 3</title>
</head>
<body>
    <ul>
        <li><?="$prix_unitaire_ht"?></li>
        <li><?="$quantity"?></li>
        <li><?="$total_ht"?></li>
        <li><?="$montant_TVA"?></li>
        <li><?="$total_TTC"?></li>
    </ul>
    <?php


    var_dump(defined('TAUX_TVA'));
    echo "<br>";
    echo defined('TAUX_TVA');
    ?>
</body>
</html>