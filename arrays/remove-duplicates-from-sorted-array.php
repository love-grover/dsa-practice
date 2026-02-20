<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $seen = [];
        for($i=0;$i<count($nums);$i++){
            if(!isset($seen[$nums[$i]])){
                $seen[$nums[$i]] = true;
            }
            else{
                unset($nums[$i]);
                array_push($nums,1);
            }
        }
        return count($seen);
    }
}
