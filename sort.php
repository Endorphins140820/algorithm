<?php
class sort
{
    public function bubble_sort($mang)
    {
        $sophantu = count($mang);
        for ($i = 0; $i < ($sophantu - 1); $i++) {
            for ($j = $i + 1; $j < $sophantu; $j++) {
                if ($mang[$i] > $mang[$j]) {
                    $tmp = $mang[$j];
                    $mang[$j] = $mang[$i];
                    $mang[$i] = $tmp;
                }
            }
        }
        return $mang;
    }
    function Selection_Sort($mang)
    {
        $sophantu = count($mang);
        for ($i = 0; $i < $sophantu - 1; $i++)
        {
            $min = $i;
            for ($j = $i + 1; $j < $sophantu; $j++){
                if ($mang[$j] < $mang[$min]){
                    $min = $j;
                }
            }
            $temp = $mang[$i];
            $mang[$i] = $mang[$min];
            $mang[$min] = $temp;
        }
        return $mang;
    }
}

