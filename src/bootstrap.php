<?php
require_once __DIR__ . '/Database.php';
date_default_timezone_set('Europe/Moscow');
// Legacy templates issue redirects after rendering; keep headers writable.
if (PHP_SAPI !== 'cli' && ob_get_level() === 0) {
    ob_start();
}

/** Advance parallel form arrays while preserving their original cursor semantics. */
function next_form_item(array &$items): array|false
{
    $key = key($items);
    if ($key === null) {
        return false;
    }
    $value = current($items);
    next($items);
    return [1 => $value, 'value' => $value, 0 => $key, 'key' => $key];
}
