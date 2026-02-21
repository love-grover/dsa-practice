<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $count = 0;
        for($i=0;$i<count($nums);$i++){
            if($nums[$i]==$val){
                unset($nums[$i]);
                array_push($nums,$val);
                $count++;
            }
        }
        return count($nums) - $count;
    }
}
