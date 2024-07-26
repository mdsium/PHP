<?php

 try{

    $b=0;

     if($b==0){
        throw new Exception("Division by zero");
     }

    $a=40/$b;
    echo $a;

 }catch(Exception $ex){

    echo "ERROR: ".$ex->getMessage().", LINE: ".$ex->getLine(),", FILE:",$ex->getFile();
 
}

?>