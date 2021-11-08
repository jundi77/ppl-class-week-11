<?php
    interface IPizzaTopping {
        public function PrepareTopping();
    }

    interface IPizza {
        public function AddTopping($topping);
        public function Prepare();
        public function Serve();
    }

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

    class ItalianPizza implements IPizza {
        public $ownerName = ""; // owner name
        public $toppings = array(); // array of toppings

        public function __construct($ownerName)
        {
            $this->$ownerName = $ownerName;

            $this->AddTopping(new MozzarellaTopping("Underdog Monster"));
            $this->AddTopping(new CheeseTopping("Alerun Special"));
        }

        public function AddTopping($topping)
        {
            array_push($this->toppings, $topping);
        }
        
        public function Prepare()
        {
            for ($i = 0; $i < count($this->toppings); $i++) {
                $this->toppings[$i]->PrepareTopping();
            }
        }

        public function Serve() {
            $content = "Italian Pizza for " . $this->ownerName . " with ";
            for ($i = 0; $i < count($this->toppings) - 1; $i++) {
                $content .= $this->toppings[$i]->brand . " ";
            }
            $content .= $this->toppings[count($this->toppings) - 1]->brand;
            $content .= " ready to serve!\n";

            echo ($content);
        }

    }

    class ComboKenyangPizza implements IPizza {
        public $ownerName = ""; // owner name
        public $toppings = array(); // array of toppings

        public function __construct($ownerName)
        {
            $this->$ownerName = $ownerName;

            $this->AddTopping(new BeefTopping("Sapi Halal"));
            $this->AddTopping(new MushroomTopping("Jamur Kemantu Special"));
            $this->AddTopping(new CheeseTopping("Alerun Special"));
        }

        public function AddTopping($topping)
        {
            array_push($this->toppings, $topping);
        }
        
        public function Prepare()
        {
            for ($i = 0; $i < count($this->toppings); $i++) {
                $this->toppings[$i]->PrepareTopping();
            }
        }

        public function Serve() {
            $content = "Italian Pizza for " . $this->ownerName . " with ";
            for ($i = 0; $i < count($this->toppings) - 1; $i++) {
                $content .= $this->toppings[$i]->brand . " ";
            }
            $content .= $this->toppings[count($this->toppings) - 1]->brand;
            $content .= " ready to serve!\n";

            echo ($content);
        }

    }

    $rumbertPizza = new ItalianPizza("Rumbert");
    $artemisPizza = new ItalianPizza("Artemis");
    $handalPizza = new ComboKenyangPizza("Handal");

    echo("Welcome to PizzaHunt!!\n\nHere we go!!\n\n");

    $rumbertPizza->Prepare();
    $rumbertPizza->Serve();

    echo "\n";

    $artemisPizza->Prepare();
    $artemisPizza->Serve();

    echo "\n";

    $handalPizza->Prepare();
    $handalPizza->Serve();

    echo "\n";
?>