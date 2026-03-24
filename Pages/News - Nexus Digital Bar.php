<?php
session_start();

$nb_visites = isset($_COOKIE['nb_visites']) ? $_COOKIE['nb_visites'] : 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/News.css">
    <link rel="stylesheet" href="../CSS/General.css">
    <link rel="stylesheet" href="../BCSS/bootstrap.css">
    <meta name="robots" content="index, follow">
    <title>Actualité - Nexus Digital Bar</title>
    <meta name="description" content="Suivez toute l'actu du jeu vidéo avec Nexus Digital ! Des sorties Next-Gen aux pépites du rétro-gaming, restez branché sur les news gaming à Toulouse et ailleurs.">
</head>
<body>
    
    <?php include "../Nav.php"; ?>

</body>
</html>