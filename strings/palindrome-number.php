<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
     function isPalindrome($x) {
        $strx = (string)$x;
        $length = strlen($strx);
        $j = $length -1;
        for($i=0;$i<$length-1;$i++){
            if($strx[$i] !== $strx[$j]){
                return false;
            }
            $j--;
        }
        return true;
    }
}
