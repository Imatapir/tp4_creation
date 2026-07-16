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
    <h1 class="logo header__logo">AquanNord</h1>
    <h5 class="text header__locations">Laval - Blainville - Rive-Nord</h5>
</header>

<?php partial('nav') ?>
<main>
