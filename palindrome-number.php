<?php

class Solution
{
    function isPalindrome($x)
    {
        if ($x < 0) {
            return false;
        }
        $y = strrev($x);
        return $x == $y;
    }
}

$s = new Solution();
$res = $s->isPalindrome(-121);
var_dump($res);