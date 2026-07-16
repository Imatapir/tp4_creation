# Générateur de sites statiques

Un **générateur de sites statiques** (_static site generator_ ou _SSG_
en anglais) est un programme qui permet de créer des sites Web composés
de pages statiques. Contrairement aux **pages dynamiques**, générées à
la demande par le serveur, les **pages statiques** sont d'abord générées
localement, puis servies telles quelles par le serveur. Elles permettent
moins d'interaction que les pages dynamiques (du moins, sans
JavaScript), mais sont généralement plus performantes et plus
sécurisées.

Pour faciliter la rédaction, la plupart des générateurs de sites
statiques intègrent des **moteurs de gabarit** (_template engine_ en
anglais) comme Jinja, EJS ou Mustache. Ces moteurs permettent de créer
des modèles réutilisables pour les pages et les éléments récurrents
comme l'en-tête ou la navigation principale.

Même s'il existe déjà plusieurs générateurs de sites statiques (Jekyll,
Hugo, etc.), il est relativement simple et plaisant de créer son propre
générateur. À titre d'exemple, ce dépôt contient un programme qui permet
de générer des pages statiques avec PHP, Bash et Wget. Vous trouverez
des instructions d'installation et d'utilisation ci-dessous.

## Installation

Pour installer le générateur, il suffit de télécharger ou de cloner ce
dépôt. PHP, Bash et Wget doivent également être installés sur votre
ordinateur.

## Utilisation

Pour ajouter une page, créez un fichier `index.php` dans `public`. L'URL
de la page correspond au chemin du répertoire où se trouve le fichier.
Par exemple :

| Chemin                           | URL               |
| -------------------------------- | ----------------- |
| `public/index.php`               | `/`               |
| `public/about/index.php`         | `/about/`         |
| `public/about/contact/index.php` | `/about/contact/` |

La commande `./dev` lance un serveur de développement. Pendant que ce
serveur est actif, `./build` génère le site statique dans `static`.

### Partials

Les fichiers dans le répertoire `partials` sont des gabarits qui peuvent
être insérés sur plusieurs pages. Pour insérer leur contenu sur une
page, invoquez la fonction `partial` avec en argument le nom du fichier,
sans extension :

```html
<!-- partials/head.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'Example Site' ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php partial('nav') ?>
<main>
```

```html
<!-- partials/footer.php -->
</main>
</body>
</html>
```

```html
<!-- public/index.php -->
<?php partial('head') ?>

<h1>Home</h1>

<?php partial('footer') ?>
```

La fonction `partial` accepte comme deuxième argument facultatif un
tableau de données :

```php
<!-- public/about/index.php -->
<?php partial('head', ['title' => 'About']) ?>
```

Ces données sont accessibles comme variable dans le gabarit :

```html
<!-- partials/head.php -->
<title><?= $title ?? 'Example Site' ?></title>
```

### Plugins

Les fichiers PHP du répertoire `plugins` sont chargés dans toutes les
pages. Vous pouvez y définir des fonctions auxiliaires afin d'éviter
d'inclure de la logique dans les gabarits.

Par exemple, la fonction `page_url` ci-dessous permet d'accéder au URL
de la page :

```php
<!-- plugins/page_url.php -->
<?php
function page_url(): string {
    return $_SERVER['REQUEST_URI'] ?? '/';
}
```

Elle permet d'identifier la page courante dans la navigation du site :

```html
<!-- partials/nav.php -->
<?php
$items = [
    'Home' => '/',
    'About' => '/about/',
];
?>
<nav class="site-nav">
    <?php foreach ($items as $label => $path): ?>
        <a
            href="<?= $path ?>"
            class="<?= page_url() === $path ? 'current' : '' ?>"
        >
            <?= $label ?>
        </a>
    <?php endforeach ?>
</nav>
```
