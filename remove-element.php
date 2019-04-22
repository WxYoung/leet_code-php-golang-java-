<?php
/**
 * Created by PhpStorm.
 * User: wxyoung
 * Date: 2019-04-22
 * Time: 14:15
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        foreach ($nums as $key => $item) {
            if($item == $val) unset($nums[$key]);
        }
        return count($nums);
    }
}


$solution = new Solution();

$array = [0,0,1,2,3,3,4,5,6,7,4,3];

$num = $solution->removeElement($array, 0);
var_dump($num);