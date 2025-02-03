<?php

namespace problem00013;

class Solution
{
    public function romanToInt(string $s): int
    {
        // * 创建罗马数字与整数之间的映射
        $hashTable = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $result = $prev = 0;

        // * 从右向左遍历，处理特殊规则（如IV = 5-1 = 4）
        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            $curr = $hashTable[$s[$i]];

            // * 如果当前数字小于前一个数字，例如 IV = 4, 则减去当前数字
            // * 否则，例如 VI = 6, 则加上当前数字
            $result = $curr < $prev ? $result - $curr : $result + $curr;

            // * 更新前一个数字
            $prev = $curr;
        }

        return $result;
    }
}
