<?php

$array = [0, 1, 2, 3, 6, 7, 8, 9, 11, 12, 14];

/**
 * 找出最大的连续的数字数组
 * @param array $inputArray
 * @return array
 */
function findSum(array $inputArray)
{
    $arrayGroups = [];

    $preValue = null;
    $index = 0;

    foreach ($inputArray as $value) {

        if (is_null($preValue)) {
            $preValue = $value;
        }

        if(($preValue + 1) != $value) {
            $index ++;
        }

        $arrayGroups[$index][] = $value;
        $preValue = $value;
    }

    usort($arrayGroups, 'compareArrays');

    $largeArray = array_pop($arrayGroups);

    return [
        'group' => implode(',', $largeArray),
        'sum' => array_sum($largeArray)
    ];
}

/**
 * 对数组的和进行对比排序，从小到大
 * @param array $a
 * @param array $b
 * @return int
 */
function compareArrays(array $a, array $b)
{
    $sum1 = array_sum($a);
    $sum2 = array_sum($b);

    if($sum1 > $sum2) {
        return 1;
    } elseif($sum1 < $sum2) {
        return -1;
    } else {
        return 0;
    }
}

