<?php

namespace problem0009;

class Solution
{
    public function isPalindrome(int $x): bool
    {
        // * 负数不是回文数
        // * 最后一位数字 0 必须是 0 本身才是回文数
        if ($x < 0 || ($x % 10 === 0 && $x !== 0)) {
            return false;
        }

        $reversed = 0;

        // * 当原始数字大于反转后的数字时，说明还没有处理到一半
        while ($x > $reversed) {
            $reversed = $reversed * 10 + $x % 10;
            $x = intval($x / 10);
        }

        // * 当数字长度为偶数时，1221 -> x = 12, reversed = 12
        // * 当数字长度为奇数时，12321 -> x = 12, reversed = 123
        return $x === $reversed || $x === intval($reversed / 10);
    }
}
