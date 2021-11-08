<?php

include_once "TwoLegsAnimal.php";
include_once "AnimalOviparInterface.php";

class Chicken extends TwoLegsAnimal implements AnimalOviparInterface {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function walk($distance, $direction) {
        echo "Chicken " . $this->get_name() . " is walking to " . $direction ." for distance ". $distance ." meter".".\n";
    }

    public function jump($distance, $height, $direction) {
        echo "Chicken " . $this->get_name() . " is jumping to " . $direction ." for distance ". $distance ." at attitude .\n";
    }

    public function layEggs() {
        $egg_count = rand() % 1000;
        echo "Chicken " . $this->get_name() . " is laying  ". $egg_count ." eggs\n";
    }

}