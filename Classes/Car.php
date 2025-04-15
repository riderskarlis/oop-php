<?php

class Car {
    private $brand;
    private $color;
    public $vehicleType = "car";

    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $allowedColors = [
            "red",
            "blue",
            "green",
            "yellow"
        ];
        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        }
    }

    public function getCarInfo() {
        return "Brand: " . $this->brand . ", Color: " . $this->color;
    } 
}
?>