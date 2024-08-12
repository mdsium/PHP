<?php
 
 abstract class Shape{

  abstract public function get_circle_area($r);
  abstract public function get_rectangle_area($w,$h);
  public function get_triangle_area($b,$h){
    return .5*$b*$h;
  } 

 } 

 class Paint extends Shape{
    public function get_circle_area($r){
        return 3.1416*$r*$r;
    }
    public function get_rectangle_area($w,$h){
          return $w*$h;
    }

 }

 $paint=new Paint();

 echo "Circle Area: ".$paint->get_circle_area(60);
 echo "<br>";
 echo "Rectangle Area: ".$paint->get_rectangle_area(5,9);
 echo "<br>";
 echo "Triangle Area: ".$paint->get_triangle_area(10,5);
 

?>