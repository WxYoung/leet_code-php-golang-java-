<?php

class Solution
{
    function reverse($x)
    {
        $f = $x > 0 ? 1 : -1;
        $x = $f * $x;
        $x = strrev($x);
        $max = pow(2, 31);
        $x   = $x < $max ? $x : 0;
        $x = $f * $x;
        return $x;
    }
}

$s = new Solution();

$ss = $s->reverse(-2147483648);
echo $ss;