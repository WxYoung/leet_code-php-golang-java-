<?php
/**
 * Created by PhpStorm.
 * User: wxyoung
 * Date: 2019-04-25
 * Time: 14:22
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $s = trim($s);
        $strArr = explode(" ",$s);
        $len = count($strArr);
        if($len < 1) {
            return strlen($s);;
        }

        $lastWord = $strArr[$len - 1];
        $int = strlen($lastWord);
        return $int;
    }
}

$solution = new Solution();
$int = $solution->lengthOfLastWord("hello ");
var_dump($int);