<?php

class Solution
{
    function twoSum($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
        return false;
    }

    function twoSum2($nums, $target)
    {
        $len = count($nums);
        for ($i = $len - 1; $i >= 0 ; $i--) {
            $x = $target - $nums[$i];
            $b = array_search($x, $nums);
            if ($b !== false && $b != $i) {
                return [$b,$i];
            }
        }
        return false;
    }
}

$s = new Solution();

$nums   = [6,6];
$target = 12;

$b = $s->twoSum2($nums, $target);
var_dump($b);