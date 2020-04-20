<?php

$reverse = new SplStack();
$reverse->push(6);
$reverse->push(5);
$reverse->push(4);
$reverse->push(3);
$reverse->push(2);
$reverse->push(1);
$count = $reverse->count();
$arr1 = [];
for ($i = 0; $i < $count; $i++) {
    $reverseNew = $reverse->pop();
    array_push($arr1, $reverseNew);
}
print_r($arr1);
