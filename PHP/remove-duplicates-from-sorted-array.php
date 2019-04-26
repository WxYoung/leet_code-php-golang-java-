<?php
/**
 * Created by PhpStorm.
 * User: wxyoung
 * Date: 2019-04-22
 * Time: 14:10
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $nums = array_flip($nums);
        $nums = array_flip($nums);
        return count($nums);
    }
}

$solution = new Solution();

$array = [0,0,1,2,3,3,4,5,6,7,4,3];

$num = $solution->removeDuplicates($array);
var_dump($num);