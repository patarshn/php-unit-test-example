<?php

require("StringUtils.php");

$text = "";
if(count($argv) > 2) exit("only accept 1 arguments");
if (isset($argv[1])) $text = $argv[1];
else $text = readline("Input string : ");

$string = new StringUtils($text);

// Get string to upper
echo $string->toUpper() . PHP_EOL;

// Get string to toggle case
echo $string->toAlternate() . PHP_EOL;

// Create CSV
$csv_file = $string->generateCSV();
echo "CSV created!" . PHP_EOL;