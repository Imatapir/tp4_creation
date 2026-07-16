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
    <nav class="nav">
        <?php foreach ($items as $label => $item): ?>
    <div class="nav__item <?= isset($item['children']) ? 'nav__item--desktop' : '' ?>">
        <?php if (isset($item['url'])): ?>
            <a href="<?= $item['url'] ?>" class="nav__link <?= page_url() === $item['url'] ? 'nav__link--current' : '' ?>">
                <?= $label ?>
            </a>
        <?php else: ?>
            <span class="nav__link <?= in_array(page_url(), $item['children']) ? 'nav__link--current' : '' ?>">
                <?= $label ?>
            </span>
        <?php endif ?>

        <?php if (isset($item['children'])): ?>
            <ul class="nav__submenu">
                <?php foreach ($item['children'] as $childLabel => $childUrl): ?>
                    <li>
                        <a href="<?= $childUrl ?>" class="nav__sublink <?= page_url() === $childUrl ? 'nav__link--current' : '' ?>">
                            <?= $childLabel ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>

    <?php if (isset($item['children'])): ?>
        <?php foreach ($item['children'] as $childLabel => $childUrl): ?>
            <div class="nav__item nav__item--mobile">
                <a href="<?= $childUrl ?>" class="nav__link <?= page_url() === $childUrl ? 'nav__link--current' : '' ?>">
                    <?= $childLabel ?>
                </a>
            </div>
        <?php endforeach ?>
    <?php endif ?>

<?php endforeach ?>
    </nav>
</div>