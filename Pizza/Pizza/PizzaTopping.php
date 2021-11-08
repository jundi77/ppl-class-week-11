<?php
    include('./IPizzaTopping.php');

    class MozzarellaTopping implements IPizzaTopping {
        public function __construct($brand)
        {
            $this->brand = $brand;
        }

        public function PrepareTopping() {
            if (isset($this->brand) && $this->brand != "") {
                echo("Prepare Mozzarella Topping by " . $this->brand . "\n");
            } else {
                echo("Prepare Mozzarella Topping\n");
            }
        }
    }

    class CheeseTopping implements IPizzaTopping {
        public function __construct($brand)
        {
            $this->brand = $brand;
        }

        public function PrepareTopping() {
            if (isset($this->brand) && $this->brand != "") {
                echo("Prepare Cheese Topping by " . $this->brand . "\n");
            } else {
                echo("Prepare Cheese Topping\n");
            }
        }
    }

    class BeefTopping implements IPizzaTopping {
        public function __construct($brand)
        {
            $this->brand = $brand;
        }

        public function PrepareTopping() {
            if (isset($this->brand) && $this->brand != "") {
                echo("Prepare Beef Topping by " . $this->brand . "\n");
            } else {
                echo("Prepare Beef Topping\n");
            }
        }
    }

    class MushroomTopping implements IPizzaTopping {
        public function __construct($brand)
        {
            $this->brand = $brand;
        }

        public function PrepareTopping() {
            if (isset($this->brand) && $this->brand != "") {
                echo("Prepare Mushroom Topping by " . $this->brand . "\n");
            } else {
                echo("Prepare Mushroom Topping\n");
            }
        }
    }

?>