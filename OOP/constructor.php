<?php

class Point{
    public $x;
    public $y;

    function __construct($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
   
    public function __toString(){
        return "(".$this->x.",".$this->y.")";
    } 
}

$p1=new Point(3,5);
echo $p1;

$p2=new Point(7,3);
echo $p2;


?>