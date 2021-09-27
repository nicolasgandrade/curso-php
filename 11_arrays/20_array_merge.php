<?php

    /**Une arrays; */

    $arr = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = [7,8,9];

    $arrMerged = array_merge($arr, $arr2, $arr3);

    print_r($arrMerged);