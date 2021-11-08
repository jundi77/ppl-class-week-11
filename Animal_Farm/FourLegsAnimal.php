<?php

include_once "Animal.php";
include_once "AnimalCanWalkInterface.php";
include_once "AnimalCanJumpInterface.php";

abstract class FourLegsAnimal extends Animal implements AnimalCanWalkInterface, AnimalCanJumpInterface {
  private $legs = 4;

  public function walk(){
      echo "I am walking on all fours";
  }
}