<?php
session_start();

$nb_visites = isset($_COOKIE['nb_visites']) ? $_COOKIE['nb_visites'] : 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Carte.css">
    <link rel="stylesheet" href="../CSS/General.css">
    <link rel="stylesheet" href="../BCSS/bootstrap.css">
    <meta name="robots" content="index, follow">
    <title>Carte - Bar Nexus Digital</title>
    <meta name="description" content="Consultez notre menu : boissons artisanales, créations exclusives et finger food. Profitez de nos jeux d'arcade gratuits tout en dégustant nos spécialités.">
</head>
<body>

    <?php include "../Nav.php"; ?>

</body>
</html>