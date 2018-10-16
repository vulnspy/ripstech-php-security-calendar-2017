<?php
$sanitized = [];

foreach ($_GET as $key => $value) {
    $sanitized[$key] = intval($value);
}

$queryParts = array_map(function ($key, $value) {
    return $key . '=' . $value;
}, array_keys($sanitized), array_values($sanitized));

$query = implode('&', $queryParts);

echo "<a href='/images/size.php?" .
    htmlentities($query) . "'>link</a>";
show_source(__FILE__);
