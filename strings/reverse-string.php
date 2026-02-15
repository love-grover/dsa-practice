<?php

function reverseString(string $str): string {
    $reversed = "";

    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    return $reversed;
}

echo reverseString("hello");
