<?php
session_start();

$nb_visites = isset($_COOKIE['nb_visites']) ? $_COOKIE['nb_visites'] : 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/Nous.css">
    <link rel="stylesheet" href="../CSS/General.css">
    <link rel="stylesheet" href="../BCSS/bootstrap.css">
    <meta name="robots" content="index, follow">
    <title>Nous - Bar Nexus Digital</title>
    <meta name="description" content="Plongez dans l'univers Nexus Digital. Découvrez l'histoire de notre bar geek au coeur de la ville Rose. Cocktails, jeux gratuits et partage dans un décor unique. Prêt pour l'aventure ?">
</head>
<body>
    
    <?php include "../Nav.php"; ?>

</body>
</html>