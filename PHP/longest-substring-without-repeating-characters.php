<?php

class Solution
{
    function lengthOfLongestSubstring($s)
    {
        $tmp = [];
        $arr = str_split($s);

        for ($i = 0; $i < count($arr); $i++) {
            for ($j = $i + 1; $i < count($arr); $j++) {
                
            }
        }

        var_dump($tmp);die;
        return $i;
    }
}

$s = new Solution();
$b = $s->lengthOfLongestSubstring("pwwkew");
var_dump($b);