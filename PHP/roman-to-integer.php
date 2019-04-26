<?php

class Solution
{
    function romanToInt($f)
    {
        $num = 0;
        $arr = str_split($f);
        $len = count($arr);


        for ($i = 0; $i< $len; $i++) {
            switch ($arr[$i]) {
                case "I":
                    switch ($arr[$i + 1]) {
                        case "V":
                            $num += 4;
                            $i++;
                            continue;
                        case "X":
                            $num += 9;
                            $i++;
                            continue;
                        default:
                            $num += 1;
                            break;
                    }
                    break;
                case "V":
                    $num += 5;
                    break;
                case "X":
                    switch ($arr[$i + 1]) {
                        case "L":
                            $num += 40;
                            $i++;
                            continue;
                        case "C":
                            $num += 90;
                            $i++;
                            continue;
                        default:
                            $num += 10;
                            break;
                    }
                    break;
                case "L":
                    $num += 50;
                    break;
                case "C":
                    switch ($arr[$i + 1]) {
                        case "D":
                            $num += 400;
                            $i++;
                            continue;
                        case "M":
                            $num += 900;
                            $i++;
                            continue;
                        default:
                            $num += 100;
                            break;
                    }
                    break;
                case "D":
                    $num += 500;
                    break;
                case "M":
                    $num += 1000;
                    break;
            }
        }
        return $num;
    }
}

$s   = new Solution();
$res = $s->romanToInt("MCMXCIV");
var_dump($res);