<?php

namespace problem00013;

beforeEach(function (): void {
    $this->solution = new Solution;
});

dataset('case', [
    ['III', 3],
    ['IV', 4],
    ['IX', 9],
    ['LVIII', 58],
    ['MCMXCIV', 1994],
]);

test('13.罗马数字转整数', function (string $s, int $expected): void {
    expect($this->solution->romanToInt($s))
        ->toEqual($expected);
})->with('case');
