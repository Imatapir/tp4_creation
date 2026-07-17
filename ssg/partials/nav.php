<?php
$items = [
    'Accueil' => ['url' => '/'],
    'Piscine' => [
        'children' => [
            'Piscine creusée' => '/services/piscine/creusee/',
            'Piscine hors-terre' => '/services/piscine/hors_terre/',
        ],
    ],
    'Thermopompe' => ['url' => '/services/thermopompe/'],
    'Filtration' => ['url' => '/services/filtration/'],
    'Système au sel' => ['url' => '/services/systeme_sel/'],
    'Contactez-Nous' => ['url' => '/contact/'],
];
?>
<div class="nav-wrapper">
    <input class="nav__toggle" type="checkbox" id="nav-toggle">
    <label class="nav__bouton" for="nav-toggle">&#9776; Menu</label>

    <nav class="nav">
        <?php foreach ($items as $label => $item): ?>
        <div class="nav__item">
            <?php if (isset($item['url'])): ?>
                <a href="<?= $item['url'] ?>" class="nav__link <?= page_url() === $item['url'] ? 'nav__link--actif' : '' ?>"><?= $label ?></a>
            <?php else: ?>
                <span class="nav__link"><?= $label ?></span>
            <?php endif ?>

            <?php if (isset($item['children'])): ?>
                <ul class="nav__submenu">
                    <?php foreach ($item['children'] as $childLabel => $childUrl): ?>
                        <li><a href="<?= $childUrl ?>" class="nav__sublink <?= page_url() === $childUrl ? 'nav__link--actif' : '' ?>"><?= $childLabel ?></a></li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        </div>
        <?php endforeach ?>
    </nav>
</div>