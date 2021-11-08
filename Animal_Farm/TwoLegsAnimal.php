<?php

include_once "Animal.php";
include_once "AnimalCanWalkInterface.php";
include_once "AnimalCanJumpInterface.php";

abstract class TwoLegsAnimal extends Animal implements AnimalCanWalkInterface, AnimalCanJumpInterface {
  private $legs = 2;
}