<?php

if(isset($_POST["btn"])){
  
    $n=$_POST["n"];

    if(isPrime($n)){
    echo "Prime";
    }else{
        echo "No Prime";
    }

}

function isPrime($n){

    if($n<=1) return false;

    for($i=2;$i<$n;$i++){
        
        if($n%$i==0)return false;

    }
   return true;
}
?>

<form action="#" method="post">
  <input type="text" name="n" />
  <input type="submit" name="btn" value="Submit" />
</form>
