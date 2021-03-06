<?php
    include_once('./IPizza.php');
    include_once('./PizzaTopping.php');

    class ItalianPizza implements IPizza {
        public $ownerName = ""; // owner name
        public $toppings = array(); // array of toppings

        public function __construct($ownerName)
        {
            $this->ownerName = $ownerName;

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
                $content .= $this->toppings[$i]->brand . ", ";
            }
            $content .= "and " . $this->toppings[count($this->toppings) - 1]->brand;
            $content .= " ready to serve!\n";

            echo ($content);
        }

    }
?>