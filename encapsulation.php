<?php

class Car {
    private $model;
    private $color;
    private $petrol;

    public function set_model($model){
        $this->model = $model;
    }
    public function set_color($color){
        $this->color = $color;
    }

    public function fill_petrol($petrol){
        $this->petrol = $petrol;
    }

    
    public function get_model(){
       return  $this->model . "<br>";
    }
    public function get_color(){
       return $this->color  . "<br>";
    }

    public function drive(){
        $this->petrol = $this->petrol - 1;

        return "remaining fuel is " . $this->petrol ." ltrs <br>";
    }
}


$car1 = new Car();

$car1->set_model("AUDI");
$car1->set_color("red");
$car1->fill_petrol(10);


echo $car1->get_model();
echo $car1->get_color();
echo $car1->drive();
echo $car1->drive();