<?php

$file = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];

array_multisort($file, SORT_ASC, SORT_NATURAL);

var_dump($file);