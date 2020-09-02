<?php
declare (strict_types=1);


namespace biwankaifa\toolbox;


class Lottery
{
    /**
     * 根据权重计算
     * @param $priority_array
     * @return int
     */
    public static function byPriority(array $priority_array): int
    {
        $result = "";
        //概率数组的总概率精度
        $total_priority = array_sum($priority_array);
        //概率数组循环
        $randNum = mt_rand(1, $total_priority);
        $a = 0;
        foreach ($priority_array as $key => $value) {
            $a += $value;
            if ($randNum <= $a) {
                $result = $key;
                break;
            }
        }
        unset ($priority_array);
        return $result;
    }
}