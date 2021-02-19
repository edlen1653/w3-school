<!DOCTYPE html>
<html>
<body>

<?php
class Car {
    public $color;
    public $model;
    public $style;
    public function __construct($color, $model, $style) {
        $this->color = $color;
        $this->model = $model;
        $this->style = $style;
    }
    public function message() {
        return "My car is a " . $this->style . " " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo", "silly");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota", "serious");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("green", "Edsel", "classic");
echo $myCar -> message();
?>

</body>
</html>
