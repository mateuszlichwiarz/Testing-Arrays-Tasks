<?php

$numbers = [4, 4, 10, 1, 52, 89];

usort($numbers, function($first, $second) {
    if($first === $second)
    {
        return 0;
    }

    return($first > $second) ? 1 : -1;
});

var_dump($numbers);