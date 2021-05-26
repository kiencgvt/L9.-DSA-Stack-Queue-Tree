<?php
include_once "Stack.php";
$stack = new Stack(10);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->pop();
$stack->pop();
$stack->pop();
var_dump($stack->isEmpty());
echo "<br>";
print_r($stack->display());
