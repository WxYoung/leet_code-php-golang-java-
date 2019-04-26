<?php

/**
 * Created by PhpStorm.
 * User: wxyoung
 * Date: 2019-04-26
 * Time: 15:16
 */
class Solution
{

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $af = strlen($a) - 1;
        $bf = strlen($b) - 1;
        $jf = 0;

        $cw = "";
        do {

            $aT = $af >= 0 ? substr($a, $af, 1) : 0;
            $bT = $bf >= 0 ? substr($b, $bf, 1) : 0;
            $cT = $aT + $bT + $jf;

            if ($cT < 2) {
                $jf = 0;
                $cw = $cT. $cw;
            } else {
                $jf = 1;
                $cT = $cT % 2;
                $cw = $cT. $cw;
            }

            $af--;
            $bf--;
        } while ($af >= 0 || $bf >= 0 || $jf > 0);

        return $cw;
    }
}

$solution = new Solution();
$str      = $solution->addBinary("1011", "1");
var_dump($str);