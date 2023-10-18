<?php

function findPatternOccurrences($text, $pattern) {
    $textLength = strlen($text);
    $patternLength = strlen($pattern);
    $count = 0;

    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $substring = substr($text, $i, $patternLength);
        if ($substring === $pattern) {
            $count++;
        }
    }

    return $count;
}

$text = "tadadattaetadadadafa";
$pattern = "dada";
$occurrenceCount = findPatternOccurrences($text, $pattern);

echo "$occurrenceCount times.";
