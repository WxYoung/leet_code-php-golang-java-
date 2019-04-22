<?php

class Solution
{
    function isValid($s)
    {
        $arr = str_split($s);

        $tmp_arr = [];
        foreach ($arr as $item) {
            switch ($item) {
                case '(':
                case '[':
                case '{':
                    array_push($tmp_arr, $item);
                    break;
                case ')':
                    $flag = array_pop($tmp_arr);
                    if ($flag != '(') return false;
                    break;
                case ']':
                    $flag = array_pop($tmp_arr);
                    if ($flag != '[') return false;
                    break;
                case '}':
                    $flag = array_pop($tmp_arr);
                    if ($flag != '{') return false;
                    break;
            }
        }

        return count($tmp_arr) ? false : true;
    }
}

$s   = new Solution();
$res = $s->isValid("()[]}}");
var_dump($res);