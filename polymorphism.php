<?php

interface Shape {
    public function calculateArea();
}


class Circle implements Shape{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return "Area of Cricle is ". round(pi() * $this->radius * $this->radius) . " Cm2";
    }
}

class Square implements Shape{
    private $side;

    public function __construct($side){
        $this->side = $side;
    }
    
    public function calculateArea()
    {
        return "Area of Square is ".  $this->side * $this->side . " Cm2";
    }
}
class Rectangle implements Shape{
    private $length;
    private $width;

    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea()
    {
        return "Area of Rectangle is ".  $this->length * $this->width . " Cm2";
    }
}

$circle1 = new Circle(15);

$square1 = new Square(15);

$rectangel1 = new Rectangle(15,25);

echo $circle1->calculateArea();
echo "<br>";
echo $square1->calculateArea();
echo "<br>";
echo $rectangel1->calculateArea();
echo "<br>";