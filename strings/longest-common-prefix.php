<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $result = '';
        $temp = '';
        $loop = strlen($strs[0]);
        for($i=0;$i<$loop;$i++){
            for($j=0;$j<count($strs);$j++){
                if($j==0){
                    $temp = $strs[$j][$i];
                }
                elseif($strs[$j][$i]!=$temp){
                    return $result;
                }
            }
            $result .= $temp;
        }
        return $result;
    }
}
