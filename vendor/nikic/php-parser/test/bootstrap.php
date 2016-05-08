<?php

namespace PhpParser;

require __DIR__ . '/../vendor/autoload.php';

function canonicalize($str) {
<<<<<<< HEAD
    // normalize EOL style
    $str = str_replace("\r\n", "\n", $str);

    // trim newlines at end
    $str = rtrim($str, "\n");

    // remove trailing whitespace on all lines
    $lines = explode("\n", $str);
    $lines = array_map(function($line) {
        return rtrim($line, " \t");
    }, $lines);
    return implode("\n", $lines);
=======
    // trim from both sides
    $str = trim($str);

    // normalize EOL to \n
    $str = str_replace(array("\r\n", "\r"), "\n", $str);

    // trim right side of all lines
    return implode("\n", array_map('rtrim', explode("\n", $str)));
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
}
