<?php

abstract class Shape{
       
  abstract public function getArea();

   public function getPerimeter(){

   }
   abstract public function getName();



}

class Ractangle extends Shape{

    private $base,$height;

    function __construct($base,$height)
    {
        $this->base=$base;
        $this->height=$height; 
        
     
    }

    public function setBase($base){
        $this->base=$base;
    }

    public function setHeight($height){

        $this->height=$height;
    }

    public function getArea(){
        return $this->base * $this->height;
    }
}

$newShape=new Ractangle(4,5);
echo $newShape->getArea();
echo $newShape->getPerimeter();
