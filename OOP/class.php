<?php
class Point {
    private $x;
    private $y;

    public function __toString(){
        return "(".$this->x.",".$this->y.")";
    }

    public function get_x(){
        return $this->x;
    }

    public function get_y(){
        return $this->y;
    }

    public function set_x($x){
        $this->x=$x;
    }

    public function set_y($y){
        $this->y=$y;
    }

    public function show_point(){
       echo "(x,y)=(".$this->x.",".$this->y.")";
    }
}


//------------------------------//

//-----outside class------
$p1=new Point();
$p1->set_x(10);
$p1->set_y(30);
$p1->show_point();

?>