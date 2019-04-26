<?php
/**
 * Created by PhpStorm.
 * User: wxyoung
 * Date: 2019-04-25
 * Time: 21:10
 */

class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits)
    {
        $count = count($digits);
        $w     = $count - 1; //当前位标志
        do {
            $num = $digits[$w];
            if ($num + 1 < 10) {
                $digits[$w] = $num + 1;
                break;
            } else {
                $digits[$w] = 0;
                if( $w == 0) {
                    if($digits[$w] == 0) {
                        array_unshift($digits,1);
                    }
                    break;
                }
            }
            $w--;
        } while (1);

        return $digits;
    }
}

$solution = new Solution();
$int      = $solution->plusOne([9,9,9]);
var_dump($int);