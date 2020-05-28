<?php

$names = ['alex', 'mathew', 'tabby', 'ashley'];
$numbers = [1,2,3,4];

array_multisort($names, $numbers);

var_dump($names);
var_dump($numbers);