<?php
function even($num){
    if($num % 2 == 0){
        return true;
    }
}
$numbers = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);

// Filtering numbers array
$result = array_filter($numbers, "even");
print_r($result);
?>