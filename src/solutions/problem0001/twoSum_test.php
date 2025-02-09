<?php

namespace problem0001;

beforeEach(function (): void {
    $this->solution = new Solution;
});

dataset('case', [
    [[2, 7, 11, 15], 9, [0, 1]],
    [[3, 2, 4], 6, [1, 2]],
    [[3, 3], 6, [0, 1]],
    [[1, 2], 4, []],
]);

test('1.两数之和', function (array $nums, int $target, array $expected): void {
    $actual = $this->solution->twoSum($nums, $target);
    expect($actual)->toEqual($expected);
})->with('case');
