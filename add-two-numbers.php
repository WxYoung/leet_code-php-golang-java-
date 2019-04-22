<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{
    function addTwoNumbers($l1, $l2)
    {
    }
}

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}

$l1  = new ListNode(2);
$l12 = new ListNode(4);
$l13 = new ListNode(3);

$l1->next  = $l12;
$l12->next = $l13;


$l2  = new ListNode(5);
$l22 = new ListNode(6);
$l23 = new ListNode(4);

$l2->next  = $l22;
$l22->next = $l23;


$s   = new Solution();
$sun = $s->addTwoNumbers($l1, $l2);
var_dump($sun);