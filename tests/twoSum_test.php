<?php

use twoSum\Solution;

beforeEach(fn () => $this->solution = new Solution);

dataset('case', [
    [[2, 7, 11, 15], 9, [0, 1]],
    [[3, 2, 4], 6, [1, 2]],
    [[3, 3], 6, [0, 1]],
]);

test('1.两数之和', function (array $nums, int $target, array $expected): void {
    expect($this->solution->twoSum($nums, $target))
        ->toEqual($expected);
})->with('case');
