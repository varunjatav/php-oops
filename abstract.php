<?php 

abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function get_radius(){
        return $this->radius. "<br>";
    }


    public function calculateArea()
    {
        return "the area of circle is ". round(pi() * pow($this->radius,2)) . " CM2 <br>";
    }
}

$circle1 = new Circle(4);

echo $circle1->get_radius();

echo $circle1->calculateArea() ;

class Square extends Shape {
    private $side;

    public function __construct($side){
        $this->side = $side;
    }

    public function calculateArea()
    {
        return "the area of square is ". pow($this->side,2)  . " CM2 <br>";
    }
}

$square1 = new Square(10);

echo $square1->calculateArea();


class Rectangle extends Shape{
    private $length;
    private $width;

    public function __construct($length,$width){
      $this->length = $length;
      $this->width = $width;
    }

    public function calculateArea()
    {
        return "the area of rectangle is ". $this->length * $this->width   ." CM2 <br>";
    }
}

$rectangle1 = new Rectangle(25,15);

echo $rectangle1->calculateArea();

?>