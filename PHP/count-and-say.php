<?php
/**
 * Created by PhpStorm.
 * User: wxyoung
 * Date: 2019-04-23
 * Time: 11:22
 */

class Solution
{

    private $arr;

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n)
    {

        if ($n == 1) {
            return "1";
        }

        $arr = [
            1 => "1"
        ];

        $lastStr = "1";
        for ($i = 2; $i <= $n; $i++) {
            $lastArr = str_split($lastStr);

            $flag     = 0;
            $flag_num = 0;
            $str      = "";
            foreach ($lastArr as $key => $item) {
                if ($flag != $item) {
                    if ($key != 0) {
                        $str = $str . $flag_num . $flag ;
                    }
                    $flag     = $item;
                    $flag_num = 1;
                } else {
                    $flag_num++;
                }

                if ($key + 1 == count($lastArr)) {
                    $str = $str . $flag_num . $flag;
                }

            }

            $lastStr = $arr[$i] = $str;
        }
        return $arr[$n];
    }
}


$solution = new Solution();
$str      = $solution->countAndSay(5);
var_dump($str);