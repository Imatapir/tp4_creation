<?php

/**
 * Return the URL path of the current page.
 */
function page_url(): string {
    return $_SERVER['REQUEST_URI'] ?? '/';
}
