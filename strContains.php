<?php

$string = "search this text";

print_r(strpos($string, 'text'));

// BEFORE PHP 8
if (strpos($string, 'text') != false) {
    echo "found";
}

// NOW IN PHP 8
if (str_contains($string, "text")) {
    echo "found";
}

// ---

function str_contains_array($haystack, array|string $needles) {
    foreach ((array) $needles as $needle) {
        if (str_contains($haystack, $needle)) {
            return true;
        }
    }
    return false;
}

$string = "You are a pretty girl";
$sweary = ["boy", "flower", "girl"];
print_r(str_contains_array($string, $sweary));