<?php
$array = ['a','b','c','d','e','f'];

array_splice($array, 0, 5, ['v', 'c']);

print_r($array);