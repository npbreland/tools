<?php

// Made with a litle help from Copilot
// Replaces spaces of one char or more with single space in each line in a file

$filename = $argv[1];

$lines = file($filename, FILE_IGNORE_NEW_LINES);

$stripped = array_map(function ($line) {
    return preg_replace('/\s+/', ' ', $line);
}, $lines);

file_put_contents($filename, implode(PHP_EOL, $stripped));
