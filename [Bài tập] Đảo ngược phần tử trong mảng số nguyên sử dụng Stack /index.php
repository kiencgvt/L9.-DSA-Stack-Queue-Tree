<?php
include_once "Stack.php";
$stack = new Stack(20);
$arr = [0, 1, 2, 3, 4, 5];
$count = count($arr);
for ($i = 0; $i < $count; $i++) {
    $stack->push($arr[$i]);
}
$arr = [];
for ($i = 0; $i < $count; $i++) {
    array_push($arr, $stack->pop());
}
echo "<pre>";
print_r($arr);
