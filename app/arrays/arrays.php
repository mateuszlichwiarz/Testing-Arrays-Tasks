<?php

$numbers = [4, 4, 10, 1, 52, 89];

usort($numbers, function($first, $second) {
    return $first <=> $second;
});

var_dump($numbers);