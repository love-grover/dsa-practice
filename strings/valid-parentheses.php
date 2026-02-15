<?php

function isValid($s) {

        $opening = ['(', '{', '['];
        $mapping = ['(' => ')', '{' => '}', '[' => ']'];

        $stack = [];
        $length = strlen($s);

        for ($i = 0; $i < $length; $i++) {

            $char = $s[$i];

            if (in_array($char, $opening)) {
                array_push($stack, $char);
            }
            else {

                if (empty($stack)) {
                    return false;
                }

                $top = array_pop($stack);

                if ($mapping[$top] !== $char) {
                    return false;
                }
            }
        }

        return empty($stack);
    }
