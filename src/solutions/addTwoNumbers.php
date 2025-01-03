<?php

namespace addTwoNumbers;

use structures\ListNode;

class Solution
{
    public function addTwoNumbers(?ListNode $l1, ?ListNode $l2): ?ListNode
    {
        $current = $head = new ListNode;
        $carry = 0;

        // * 遍历两个链表，计算每个节点的和，并与当前进位值相加
        // * 遍历结束后，如果还有进位值，则在链表末尾添加新的节点
        while ($l1 !== null || $l2 !== null || $carry !== 0) {
            $sum = ($l1?->val ?? 0) + ($l2?->val ?? 0) + $carry;

            $l1 = $l1?->next ?? null;
            $l2 = $l2?->next ?? null;

            $current->next = new ListNode($sum % 10);
            $current = $current->next;
            $carry = intval($sum / 10);
        }

        return $head->next;
    }
}
