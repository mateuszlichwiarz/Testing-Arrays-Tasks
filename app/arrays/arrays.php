<?php

$users = [
    ['username' => 'alex', 'reputation' => 50, 'posts' => 200],
    ['username' => 'dale', 'reputation' => 300, 'posts' => 150],
    ['username' => 'billy', 'reputation' => 2, 'posts' => 5],
    ['username' => 'ashley', 'reputation' => 1, 'posts' => 6],
];

function sortByScore($first, $second)
{
    $scoreOne = $first['reputation'] = $first['posts'];
    $scoreTwo = $second['reputation'] = $second['posts'];

    if($scoreOne === $scoreTwo)
    {
        return ($first['reputation'] > $second['reputation']) ? 0 : 1;
    }

    return ($scoreOne > $scoreTwo) ? -1 : 1;
}

usort($users, 'sortByScore');

var_dump($users);