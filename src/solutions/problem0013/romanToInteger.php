<?php

namespace problem0013;

class Solution
{
    public function romanToInt(string $s): int
    {
        // * 创建罗马数字到整数的映射
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

            // * 如果当前值小于前一个值，说明是特殊情况（如IV）
            if ($curr < $prev) {
                $result -= $curr;
            } else {
                $result += $curr;
            }

            $prev = $curr;
        }

        return $result;
    }
}
