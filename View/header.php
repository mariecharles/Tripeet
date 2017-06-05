<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Polices -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <title>Tripeet - Réseau social pour voyageurs</title>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="<?php

    $page = $_GET['page'] ?? $_POST['page'] ?? '';

    switch($page) {
        case('paris'):
            echo 'Ah Paris ! Bienvenue dans la ville lumière petit Tripeeters ! Entre les musées et expos incontournables pour vous les smart, 
            les balades et dizaines de bars le long du canal et de la seine pour vous les chill, les arcades et cinés pour vous les geeks 
            et certains de plus beaux parcs d’Europe pour nos sportif, on a un beau programme pour vous ! Suivez le guide…';
            break;

        case('mentions-legales'):
            echo 'Tripeeters, qui sommes nous ? Toutes les informations légales sur notre société, raison sociale, forme juridique, siège social, montant du capital social…';
            break;

        case('contact');
            echo 'Besoin d’aide ? Pose nous ta question ! Parce que nous aimons nos Tripeeters, nous garantissons une réponse en moins de 24h.';
            break;

        default:
            echo 'Rejoignez la communauté Tripeeters : que vous soyez geek, sportif, smart ou chill, rencontrez de jeunes 
            voyageurs qui partagent vos centres d’intérêts ou créez votre propre
             communauté ! Evénements exclusifs, bons plans et rencontres inoubliables sont au rendez-vous.';
            break;
    }

    ?>" />
    
</head>
<body>
<header class="clearfix">
    <h1><a href="/tripeet"><img src="img-layout/logo.png" alt="tripeet"></a></h1>
        <nav>
        <img src="img-layout/burger.svg" alt="menu burger">
    </nav>
    <div class="rapid-search clearfix">
        <form action="">
            <input type="text" placeholder="Et maintenant ?">
        </form>
        <img src="img-layout/search.svg" alt="recherche">
    </div>
</header>