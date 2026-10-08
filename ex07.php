<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo07</title>
</head>
<body>


<?php

$nombre = 7;

for ($i = 1; $i <= 10; $i++) {
    echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
}

echo "<br>";

?>



<?php

for ($ligne = 1; $ligne <= 6; $ligne++) {

    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "*";
    }
    echo "<br>";
}

?>


</body>
</html>