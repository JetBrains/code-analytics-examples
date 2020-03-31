<?php

function capacity_1($my_array) {
    for ($i = 0; $i < count($my_array); $i++) {
        $j = $i - 1;
        while ($j >= 0 && $my_array[$j] > $val) {
            $j--;
        }
        $my_array[$j + 1] = $val;
    }
    return $my_array;
}

function capacity_2($my_array) {
    for ($i = 0; $i < count($my_array); $i++) {
        $j = $i - 1;
        while ($j >= 0 && $my_array[$j] > $val) {
            $j--;
        }
        $my_array[$j + 1] = $val;
    }
    return $my_array;
}

function insertion_sort2($my_array) {
    for ($i = 0; $i < count($my_array); $i++) {
        $val = $my_array[$i];
        $j = $i - 1;
        while ($j >= 0 && $my_array[$j] > $val) {
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $val;
    }
    return $my_array;
}