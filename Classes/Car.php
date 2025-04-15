<?php

class Car {
    private $brand;
    private $color;
    private $vehicleType = "car";

    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color;
    }
}

$car01 = new Car("Volvo", "green");

?>