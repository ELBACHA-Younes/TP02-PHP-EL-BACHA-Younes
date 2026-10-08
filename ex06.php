<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex06</title>
</head>
<body>


<?php

$numeroMois = 12;

switch ($numeroMois) {
    case 1: echo "Janvier"; break;
    case 2: echo "Février"; break;
    case 3: echo "Mars"; break;
    case 4: echo "Avril"; break;
    case 5: echo "Mai"; break;
    case 6: echo "Juin"; break;
    case 7: echo "Juillet"; break;
    case 8: echo "Août"; break;
    case 9: echo "Septembre"; break;
    case 10: echo "Octobre"; break;
    case 11: echo "Novembre"; break;
    case 12: echo "Décembre"; break;

    default:
        echo "Numéro de mois invalide";
}

echo "<br>";

$numeroMois =(int) date("m");

echo "Mois du serveur : ";

switch ($numeroMois) {

    case 1: echo "Janvier"; break;
    case 2: echo "Février"; break;
    case 3: echo "Mars"; break;
    case 4: echo "Avril"; break;
    case 5: echo "Mai"; break;
    case 6: echo "Juin"; break;
    case 7: echo "Juillet"; break;
    case 8: echo "Août"; break;
    case 9: echo "Septembre"; break;
    case 10: echo "Octobre"; break;
    case 11: echo "Novembre"; break;
    case 12: echo "Décembre"; break;
    default:
        echo "Numéro de mois invalide";
}

?>

</body>
</html>