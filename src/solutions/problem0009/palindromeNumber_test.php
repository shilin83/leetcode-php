<?php

namespace problem0009;

beforeEach(function (): void {
    $this->solution = new Solution;
});

dataset('case', [
    [121, true],
    [-121, false],
    [10, false],
]);

test('9.回文数', function (int $x, bool $expected): void {
    expect($this->solution->isPalindrome($x))
        ->toEqual($expected);
})->with('case');
