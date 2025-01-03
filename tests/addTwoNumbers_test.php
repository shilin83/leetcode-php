<?php

use addTwoNumbers\Solution;

beforeEach(fn () => $this->solution = new Solution);

dataset('case', [
    [[2, 4, 3], [5, 6, 4], [7, 0, 8]],
    [[0], [0], [0]],
    [[9, 9, 9, 9, 9, 9, 9], [9, 9, 9, 9], [8, 9, 9, 9, 0, 0, 0, 1]],
]);

test('2.两数相加', function (array $nums1, array $nums2, array $expected): void {
    expect($this->solution->addTwoNumbers(int2List($nums1), int2List($nums2)))
        ->toEqual(int2List($expected));
})->with('case');
