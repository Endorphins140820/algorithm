<?php

class search
{
    public function linear_search($arr, $x)
    {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $x) {
                return true;
            }
        }
        return false;
    }
    
    public function binary_search($x, $arr)
    {
        $left = 0;
        $right = count($arr) - 1;

        while ($left <= $right) {
            $mid = ($left + $right) >> 1;

            if ($arr[$mid] == $x) {
                return $mid;
            } elseif ($arr[$mid] > $x) {
                $right = $mid - 1;
            } elseif ($arr[$mid] < $x) {
                $left = $mid + 1;
            }
        }
        return -1;
    }
}