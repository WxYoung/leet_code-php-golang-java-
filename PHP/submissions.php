<?php
/**
 * Created by PhpStorm.
 * User: wxyoung
 * Date: 2019-04-22
 * Time: 19:16
 */

class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        if(!$needle) {
            return 0;
        }
        if($haystack == $needle) {
            return 0;
        }
        $int = strpos($haystack,$needle);
        if($int === false) {
            return -1;
        } else {
            return $int;
        }
    }
}

$solution = new Solution();
$haystack = 'aaa';
$needle   = 'bba';
$int      = $solution->strStr($haystack, $needle);
var_dump($int);