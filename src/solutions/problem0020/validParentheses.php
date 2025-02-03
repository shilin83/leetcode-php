<?php

namespace problem0020;

class Solution
{
    public function isValid(string $s): bool
    {
        $stack = [];

        for ($i = 0; $i < strlen($s); $i++) {
            switch ($s[$i]) {
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
                    // * 遇到右括号，检查是否与栈顶元素匹配
                case ')':
                case '}':
                case ']':
                    // * 弹出栈顶元素
                    if (array_pop($stack) !== $s[$i]) {
                        return false;
                    }
                    break;
                default:
                    return false;
            }
        }

        // * 如果栈为空，说明括号匹配
        return empty($stack);
    }
}
