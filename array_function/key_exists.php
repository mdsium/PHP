<?php
$lang = array("en"=>"English", "fr"=>"French", "bg"=>"Bangla");
    
// Test if key exists in the array
if(array_key_exists("fr", $lang)){
    echo "Key exists!";
} else{
    echo "Key does not exist!";
}
?>