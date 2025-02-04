<?php

namespace problem0009;

class Solution
{
    public function isPalindrome(int $x): bool
    {
        // * 负数或最后一位是 0 且不是 0 本身的数字不是回文数
        if ($x < 0 || ($x % 10 === 0 && $x !== 0)) {
            return false;
        }

        // * 当原始数字大于反转后的数字时, 说明还没处理到一半
        $reversed = 0;
        while ($x > $reversed) {
            $reversed = $reversed * 10 + $x % 10;
            $x = intdiv($x, 10);
        }

        // * 当数字长度为偶数时，1221 -> x = 12, reversed = 12
        // * 当数字长度为奇数时，12321 -> x = 12, reversed = 123
        return $x === $reversed || $x === intdiv($reversed, 10);
    }
}
