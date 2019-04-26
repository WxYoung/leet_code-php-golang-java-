<?php

class Solution
{
    function longestCommonPrefix($strs)
    {
        $arr = [];
        $len = count($strs);

        if($len == 1) {
            return $strs[0];
        }

        $pre = '';
        foreach ($strs as $str) {
            $arr[] = str_split($str);
        }

        foreach ($arr[0] as $key => $item) {

            for ($i = 1;$i<$len;$i++) {
                if ($arr[$i][$key] != $item) {
                    return $pre;
                }
            }
            $pre .= $item;
        }

        return $pre;
    }
}

$s   = new Solution();
$res = $s->longestCommonPrefix(["c", "c"]);
var_dump($res);