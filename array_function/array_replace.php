<?php
$array1 = array("tea", "coffee", "chips");
$array2 = array("apple", "orange", "nuts");

// Replace the values of array1 with the values of array2
$result = array_replace($array1, $array2);
print_r($result);
?>
<?php
$array1 = array("apple", "banana", "orange", "mango");
$array2 = array(0=>"pineapple", 2=>"grape", 4=>"kiwi");

// Performing array replacement
$result = array_replace($array1, $array2);
print_r($result);
?>