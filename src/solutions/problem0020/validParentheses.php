<?php

namespace problem0020;

class Solution
{
    public function isValid(string $s): bool
    {
        $stack = [];

        foreach (str_split($s) as $c) {
            switch ($c) {
                // * 遇到左括号，将对应的右括号入栈
                case '(':
                    $stack[] = ')';
                    break;
                case '{':
                    $stack[] = '}';
                    break;
                case '[':
                    $stack[] = ']';
                    break;
                default:
                    // * 遇到右括号，检查是否与栈顶元素匹配
                    // * 其他字符都是非法的
                    if (array_pop($stack) !== $c) {
                        return false;
                    }
            }
        }

        return empty($stack);
    }
}
