<?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            if (isset($title)) {
                echo $title;
            } else {
                echo "Les ciseaux de Florine";
            } ?></title>
    <link rel="stylesheet" href="CSS/app/app.css">
</head>
<body>

<header id="header">
    <div class="menu-icon" id="menu-icon">
        <span></span>
    </div>
    <div class="header-top">
        <h1>Les ciseaux de Florine</h1>
        <span class="subtitle">Coiffure à domicile</span>
    </div>
    <nav id="nav">
        <ul class="menu">
            <?= menu(); ?>
        </ul>
    </nav>
</header>