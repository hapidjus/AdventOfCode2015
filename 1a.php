<?php
$input = file_get_contents('inputs/1.txt');
$chars = count_chars($input);
echo $chars[ord('(')] - $chars[ord(')')];