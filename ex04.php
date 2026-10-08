<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex04</title>
</head>
<body>

<pre>
<?php

$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;

var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);



$chaineEnEntier = (int) $chaine;
$decimalEnEntier = (int) $decimal;
$entierEnChaine = (string) $entier;

var_dump($chaineEnEntier);
var_dump($decimalEnEntier);
var_dump($entierEnChaine);

echo "\navec echo<br>";

echo "true : ";
echo true;

echo "<br>";

echo "false : ";
echo false;

echo "<br>";

echo "\navec vardump<br>";

var_dump(true);
var_dump(false);

echo "\n<br>";

var_dump((bool) 0);
var_dump((bool) "0");
var_dump((bool) "PHP");
var_dump((bool) []);

?>
</pre>

</body>
</html>