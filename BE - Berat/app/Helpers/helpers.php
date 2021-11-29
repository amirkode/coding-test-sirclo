<?php

function beratAvg($beratData) {
    $min = 0;
    $max = 0;
    $diff = 0;
    foreach($beratData as $data) {
        $min += $data->min;
        $max += $data->max;
        $diff += $data->max - $data->min;
    }

    $res = new stdClass();
    $res->avg_min = $min / count($beratData);
    $res->avg_max = $max / count($beratData);
    $res->avg_diff = $diff / count($beratData);  

    return $res;
}