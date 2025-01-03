<?php

use structures\ListNode;

function int2List(array $nums): ?ListNode
{
    $head = null;

    if (! empty($nums)) {
        foreach (array_reverse($nums) as $num) {
            $node = new ListNode($num, $head);
            $head = $node;
        }
    }

    return $head;
}
