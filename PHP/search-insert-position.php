<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $nums = array_flip($nums);
        if(isset($nums[$target])) {
            return $nums[$target];
        }

        $flag = 0;
        foreach ($nums as $key => $item) {
            if($target < $key ) {
                return $flag;
            }
            $flag++;
        }

        return $flag;
    }
}

$solution = new Solution();
$int = $solution->searchInsert([1,3,5,6], 0);
var_dump($int);
