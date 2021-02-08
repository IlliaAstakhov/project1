<?php

$first = readline("Poot 1st number: ");
$second = readline("Poot 2st number: ");
$function = readline("Poot what do i need (*,+,/,-): ");

if ($function == '+') {
    echo $first + $second;
} elseif ($function == '-') {
    echo $first - $second;
} elseif ($function == '*') {
    echo $first * $second;
} elseif ($function == '/') {
    echo $first / $second;
}
