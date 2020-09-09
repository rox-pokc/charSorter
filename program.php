<?php

namespace CharSorter;

require ('Sorter.php');

$text = trim(readline('Enter a string: '));
$sortedText = Sorter::sortText($text);
echo $sortedText."\n";