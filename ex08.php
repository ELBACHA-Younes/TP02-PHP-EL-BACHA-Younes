<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 8</title>
</head>
<body>

<h1>Partie 1</h1>

<?php

$nombre = 0;

while ($nombre <= 20) {

    if ($nombre == 10) {
        echo "<strong>$nombre</strong><br>";
    } else {
        echo $nombre . "<br>";
    }

    $nombre += 2;
}

?>

<h1>Partie 2</h1>

<?php

$compteur = 5;
$executionsWhile = 0;

while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}

echo "Nombre d'exécutions avec while : " . $executionsWhile . "<br>";

$compteur = 5;
$executionsDoWhile = 0;

do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);

echo "Nombre d'exécutions avec do-while : " . $executionsDoWhile . "<br>";

?>

<h1>Partie 3</h1>

<?php

for ($i = 1; $i <= 20; $i++) {

    if ($i % 3 == 0) {
        continue;
    }

    if ($i >= 16) {
        break;
    }

    echo $i . "<br>";
}

?>

</body>
</html>