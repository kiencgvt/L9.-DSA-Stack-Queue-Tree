<?php
include_once "Patient.php";
include_once "Queue.php";
$patient1 = new Patient("Smith", 5);
$patient2 = new Patient("Jones", 4);
$patient3 = new Patient("Fehrenbach", 6);
$patient4 = new Patient("Brown", 1);
$patient5 = new Patient("Ingram", 1);
$queue = new Queue(20);
$queue->enqueue($patient1);
$queue->enqueue($patient2);
$queue->enqueue($patient3);
$queue->enqueue($patient4);
$queue->enqueue($patient5);
echo $queue->dequeue()->name;
echo "<br>";
echo $queue->dequeue()->name;
echo "<pre>";
$queue->__toString();