<?php
$persons = array("Harry"=>22, "Clark"=>32, "John"=>28);

// Changing keys to uppercase
print_r(array_change_key_case($persons, CASE_UPPER));
?>