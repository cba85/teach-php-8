<?php

// Start

$string = 'category';

if (substr($string, 0, 3) === 'cat') {
    echo 'ok';
}

if (substr_compare($string, 'cat', 0, 3) === 0) {
    echo 'ok';
}

// End

$string = 'tomcat';

if (substr_compare($string, 'cat', -3, 3) === 0) {
    echo 'ok';
}

// NOW IN PHP 8

if (str_starts_with($string, 'cat')) {
    echo 'ok';
}

if (str_ends_with($string, 'cat')) {
    echo 'ok';
}
