<?php
$array1 = array("tea", "coffee", "chips");
$array2 = array("apple", "orange", "nuts");

// Replace the values of array1 with the values of array2
$result = array_replace($array1, $array2);
print_r($result);
?>