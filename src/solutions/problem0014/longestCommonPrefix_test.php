<?php

namespace problem0014;

beforeEach(function (): void {
    $this->solution = new Solution;
});

dataset('case', [
    [['flower', 'flow', 'flight'], 'fl'],
    [['dog', 'racecar', 'car'], ''],
]);

test('14.最长公共前缀', function (array $strs, string $expected): void {
    expect($this->solution->longestCommonPrefix($strs))
        ->toEqual($expected);
})->with('case');
