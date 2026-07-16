<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'Example Site' ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="header">
    <div class="header__logo">
        <h1 class="logo header__h1">AquanNord</h1>
        <p class="text header__locations">Laval - Blainville - Rive-Nord</p>
    </div>

</header>

<?php partial('nav') ?>
<main>
