<?php
include "helpers.php";
$input = [
    'ugknbfddgicrmopn',
    'aaa',
    'jchzalrnumimnmhp',
    'haegwjzuvuyypxyu',
    'dvszwmarrgswjxmb',
];
$input = file('inputs/5.txt', FILE_IGNORE_NEW_LINES);

array_walk($input, function ($item) {
    if (isNice($item)) {
        echo "\033[32m" . $item . "\033[0m";
    } else {
        echo "\033[31m" . $item . "\033[0m";
    }
    echo PE;
});

echo count(array_filter($input, 'isNice'));

function hasThreevowels($word)
{
    $chars = count_chars($word, 1);
    $vowelCount =
        ($chars[ord('a')] ?? 0)
        + ($chars[ord('e')] ?? 0)
        + ($chars[ord('i')] ?? 0)
        + ($chars[ord('o')] ?? 0)
        + ($chars[ord('u')] ?? 0);
    return $vowelCount > 2;
}

function hasDuplicates($word)
{
    return preg_match('/(.)\1+/', $word);
}

function containsInvalid($word)
{
    if (strpos($word, 'ab') !== false) {
        return true;
    }
    if (strpos($word, 'cd') !== false) {
        return true;
    }
    if (strpos($word, 'pq') !== false) {
        return true;
    }
    if (strpos($word, 'xy') !== false) {
        return true;
    }
    return false;
}

function isNice($word)
{
    if (containsInvalid($word)) {
        return false;
    }
    if (!hasThreevowels($word)) {
        return false;
    }
    if (!hasDuplicates($word)) {
        return false;
    }
    return true;
}