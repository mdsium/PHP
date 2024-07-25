<h2>1. String data type</h2>
<?php 
$userName = "Mohammed Sium";

echo gettype($userName);
echo "<br>";
var_dump($userName);
?>

<h2>2. integer data type</h2>
<?php 
$user_id = 155;

echo gettype($user_id);
echo "<br>";
var_dump($user_id);
?>

<h2>3. float data type</h2>
<?php 
$price = 15.5;
var_dump($price);
?>

<h2>4. Boolean data type</h2>
<?php 
$price = true;
var_dump($price);
?>
<h2>5. array data type</h2>
<?php 
$room =['red','green','blue',10,20.10,true];
var_dump($room);
?>
<h2>6. object</h2>
<?php

class user{
   public $name ="sium";
}

$user = new user();
echo $user->name;
echo "<br>";
var_dump($user);
?>


<h3>7. null</h3>
<?php
$roll = 45;
$roll = null;
var_dump($roll);
echo $roll;

?>

<h3>8. resource</h3>
<?php
$file = fopen('note.txt','r');
var_dump($file);
echo $file;

?>



