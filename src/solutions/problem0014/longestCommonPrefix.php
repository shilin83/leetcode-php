<?php

namespace problem0014;

class Solution
{
    public function longestCommonPrefix(array $strs): string
    {
        // * 以第一个字符串为基准
        $prefix = $strs[0];

        for ($i = 1; $i < count($strs); $i++) {
            $j = 0;

            // * 逐个字符比较
            while ($j < strlen($prefix) && $j < strlen($strs[$i])) {
                if ($prefix[$j] !== $strs[$i][$j]) {
                    $prefix = substr($prefix, 0, $j);
                    break;
                }

                $j++;
            }
        }

        return $prefix;
    }
}
