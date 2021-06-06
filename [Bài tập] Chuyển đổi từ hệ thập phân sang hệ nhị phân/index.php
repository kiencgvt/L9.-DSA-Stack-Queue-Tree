<?php
include_once "Stack.php";
decimalToBinary(15);
function decimalToBinary($number) {
    $stack = new Stack(100);
    while ($number / 2 != 0) {
        $stack->push($number % 2);
        $number = floor($number / 2);
    }
    echo "(";
    $count = count($stack->stack);
    for ($i = 0; $i < $count; $i++) {
        echo $stack->pop();
    }
    echo ")B";
}