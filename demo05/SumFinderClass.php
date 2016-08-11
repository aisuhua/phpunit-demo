<?php

class SumFinderClass
{
    private $inputArray;

    public function __construct(array $inputArray = null)
    {
        $this->inputArray = $inputArray;
    }

    /**
     * 找出数组中相加的和最大的连续的那几个数，并返回他们的和
     */
    public function findSum()
    {
        $arrayGroups = [];

        $preValue = null;
        $index = 0;

        foreach ($this->inputArray as $value) {

            if (is_null($preValue)) {
                $preValue = $value;
            }

            if(($preValue + 1) != $value) {
                $index ++;
            }

            $arrayGroups[$index][] = $value;
            $preValue = $value;
        }

        usort($arrayGroups, [$this, 'compareArrays']);

        $largeArray = array_pop($arrayGroups);

        return [
            'group' => implode(',', $largeArray),
            'sum' => array_sum($largeArray)
        ];
    }

    /**
     * 对比两个数组的和的大小，进行排序
     * @param array $a
     * @param array $b
     * @return int
     */
    public function compareArrays(array $a, array $b)
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
}