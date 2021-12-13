<?php
include "helpers.php";
$input = [
    'qjhvhtzxzqqjkmpb',
    'xxyxx',
    'uurcxstgmygtbstg',
    'ieodomkazucvgmuy',
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

function hasLetterSandwich($word)
{
    return preg_match('/((?i)[a-z])\S{1}\1/', $word);
}
function containPairs($word)
{
    return preg_match('/((?i)[a-z]{2})\S*\1/', $word);
}
function isNice($word){
    if(!containPairs($word)){
        return false;
    }
    if(!hasLetterSandwich($word)){
        return false;
    }

    return true;
}