<?php

include_once "Animal.php";
include_once "TwoLegsAnimal.php";
include_once "AnimalViviparInterface.php";

class Sheep extends TwoLegsAnimal implements AnimalViviparInterface {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function walk($distance, $direction) {
        echo "Sheep " . $this->get_name() . " is walking to " . $direction ." for distance ". $distance ." meter".".\n";
    }

    public function birth() {
        $child_count = rand() % 1000;
        echo "Sheep " . $this->get_name() . " is birthing  ". $child_count ." childs\n";
    }

    public function jump($distance, $height, $direction) {
        echo "Sheep " . $this->get_name() . " is jumping to " . $direction ." for distance ". $distance ." at attitude .\n";
    }
}