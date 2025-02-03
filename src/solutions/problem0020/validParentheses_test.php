<?php

namespace problem0020;

beforeEach(function (): void {
    $this->solution = new Solution;
});

dataset('case', [
    ['()', true],
    ['()[]{}', true],
    ['(]', false],
    ['([])', true],
    [' ', false],
]);

test('20.有效的括号', function (string $s, bool $expected): void {
    expect($this->solution->isValid($s))
        ->toEqual($expected);
})->with('case');
