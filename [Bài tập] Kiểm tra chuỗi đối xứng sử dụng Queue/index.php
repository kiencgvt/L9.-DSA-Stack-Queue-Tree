<?php
include_once "Stack.php";
include_once "Queue.php";
$str = "able was I ere I saw elba";
var_dump(symmetryCheck($str));
function symmetryCheck($str)
{
    $stack = new Stack(100);
    $queue = new Queue(100);
    for ($i = 0; $i < strlen($str); $i++) {
        $stack->push($str[$i]);
        $queue->enqueue($str[$i]);
    }
    $count = count($stack->stack);
    for ($i = 0; $i < $count; $i++) {
        if ($stack->pop() == $queue->dequeue()) {
            continue;
        }
        return false;
    }
    return true;
}
