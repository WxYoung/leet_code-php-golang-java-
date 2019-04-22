<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}

class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function Merge($pHead1, $pHead2)
    {
        if($pHead1 == NULL)
            return $pHead2;
        if($pHead2 == NULL)
            return $pHead1;
        $reHead = new ListNode(null);
        if($pHead1->val < $pHead2->val){
            $reHead = $pHead1;
            $pHead1 = $pHead1->next;
        }else{
            $reHead = $pHead2;
            $pHead2 = $pHead2->next;
        }
        $p = $reHead;
        while($pHead1&&$pHead2){
            if($pHead1->val <= $pHead2->val){
                $p->next = $pHead1;
                $pHead1 = $pHead1->next;
                $p = $p->next;
            }
            else{
                $p->next = $pHead2;
                $pHead2 = $pHead2->next;
                $p = $p->next;
            }
        }
        if($pHead1 != NULL){
            $p->next = $pHead1;
        }
        if($pHead2 != NULL)
            $p->next = $pHead2;
        return $reHead;
    }
}