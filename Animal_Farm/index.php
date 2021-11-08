<?php

include_once "Chicken.php";
include_once "Sheep.php";

$chicken = [];
$sheep = [];
for ($i=0; $i < 5; $i++) { 
    $chicken[] = new Chicken("Chicken-$i");
    $sheep[] = new Sheep("Sheep-$i");
}

for ($i=0; $i < 5; $i++) { 
    echo($chicken[i]->walk(23,"front"));
    echo($chicken[i]->jump(23, 2, "front"));
    echo($sheep[i]->walk(23,"left"));
}




