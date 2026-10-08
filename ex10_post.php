<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ex 10 POST</title>
</head>
<body>

<h1>Résultat POST</h1>

<?php

if (
    isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["groupe"])
) {

    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);

    if ($nom === "" || $prenom === "" || $groupe === "") {

        echo "<p>Erreur : tous les champs sont obligatoires.</p>";

    } else {

        $nom = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, "UTF-8");
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, "UTF-8");

        echo "<p>Bienvenue " . $prenom . " " . $nom .
             " ! Vous êtes dans le groupe " . $groupe . ".</p>";
    }

} else {

    echo "<p>Veuillez remplir le formulaire POST avant d'accéder à cette page.</p>";

}

?>

</body>
</html>