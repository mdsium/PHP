<?php
    
   
if(isset($_POST["submit"])){
$n=$_POST["number"];

$fact=1;
for($i=1; $i<=$n; $i++){
    $fact=$fact*$i;
}
    echo $fact;
}

?>

<form action="#" method="POST">
    <input type="text" name="number">
    <input type="submit" name="submit" value="Submit">
</form>