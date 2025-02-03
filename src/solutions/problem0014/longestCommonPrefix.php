<?php

namespace problem00014;

class Solution
{
    public function longestCommonPrefix(array $strs): string
    {
        // * 以第一个字符串为基准
        $prefix = $strs[0];

        // * 遍历其他字符串，逐个比较
        for ($i = 1; $i < count($strs); $i++) {
            for ($j = 0; $j < strlen($prefix); $j++) {
                if (strlen($strs[$i]) <= $j || $strs[$i][$j] !== $prefix[$j]) {
                    $prefix = substr($prefix, 0, $j);
                    break;
                }
            }
        }

        return $prefix;
    }
}
