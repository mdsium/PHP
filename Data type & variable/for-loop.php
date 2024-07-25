<?php
for($i=1; $i<10; $i++){
    echo $i."<br>";
}
?>
<?php
for($x=0; $x<10; $x++){
    if($x == 4){
        continue;
    }
    echo "The number is: $x <br>";
}

?>