<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $array = ["I"=>1,"V"=>5,"X"=>10,"L"=>50,"C"=>100,"D"=>500,"M"=>1000];
        $c = strlen($s);
        $sum = 0;
        for($i=0;$i<$c;$i++){
            if($i == $c - 1){
                $char = $s[$i];
                $sum += $array[$char];
            }
            else{
                $current = $s[$i];
                $next = $s[$i+1];
                if($array[$next] > $array[$current]){
                    $sum += ( $array[$next] - $array[$current] );
                    $i++;
                }
                else{
                    $char = $s[$i];
                    $sum += $array[$char];
                }
            }

    }
        return $sum;
    }
}
