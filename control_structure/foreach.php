<?php
  $numbers=[3,7,89,3,2];

  foreach($numbers as $number){
     echo $number.",";
  }


  foreach($numbers as $index=>$number){
    echo $index."=".$number."<br>";
  }

 $words=["dhaka"=>"Bangladesh","delhi"=>"India","beijing"=>"China"];
 foreach($words as $city=>$country){
    echo $country."=".$city."<br>";
 }



?>