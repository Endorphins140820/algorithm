<?php
class MaxChar
{
    public static function get(string $string){
        $array=str_split($string, 1);
        $count_values = array_count_values($array);
        echo array_search(max($count_values), $count_values);
    }
}
MaxChar::get("apple 2202");