<?php

declare(strict_types=1);

// **** CONFIG *******************************************************

const SRC_DIR = __DIR__ . '/public/';
const PARTIALS_DIR = __DIR__ . '/partials/';
const PLUGINS_DIR = __DIR__ . '/plugins/';

// **** PARTIALS *****************************************************

/**
 * Render a partial.
 *
 * @param $name Partial name, without extension.
 * @param $variables Variables to expose to the partial.
 */
function partial(string $name, array $variables = []): void {
    extract($variables);
    include PARTIALS_DIR . $name . '.php';
}

// **** PLUGINS ******************************************************

foreach (glob(PLUGINS_DIR . '*.php') as $filename) {
    include $filename;
}

// **** INIT *********************************************************

if (!is_file(SRC_DIR . $_SERVER['REQUEST_URI'] . '/index.php')) {
    http_response_code(404);
    die('File ' . $_SERVER['REQUEST_URI'] . '/index.php not found.');
}
