<?php
class Car {
    private $make,$model,$year;
    function __construct($make,$model,$year)
    {
        $this->make=$make;
        $this->model=$model;
        $this->year=$year;

        // $this->get_make();
        // $this->get_model();
        // $this->get_year();
    }


    function set_make($make){
        $this->make=$make;
    }

    function get_make(){
            return $this->make;
    }
    function set_model($model){
        $this->model=$model;
    }

    function get_model(){
            return$this->model;
    }
     function set_year($year){
        $this->year=$year;
    }

    function get_year(){

        return $this->year;
    }

    function display_info(){
        echo "Car Make: {$this->get_make()}\n";
        echo "Car Model: {$this->get_model()}\n";
        echo "Car Year: {$this->get_year()}\n";
       
       
    }
}

$newCar1=new Car("Toyota","Corolla",2015);
$newCar1->display_info();
$newCar1->set_make('Honda');
$newCar1->set_model("Civic");
$newCar1->display_info();

