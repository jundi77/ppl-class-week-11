<?php


abstract class Animal  {
  private $name;
  private $cold_blooded = false;

  public function __construct($name) {
    $this->name = $name;
  }

  public function get_name() {
    return $this->name;
  }

  public function set_name($name) {
    $this->name = $name;
  }

  public function get_cold_blooded() {
    return $this->cold_blooded;
  }

  public function set_cold_blooded($cold_blooded) {
    $this->cold_blooded = $cold_blooded;
  }

  public function __toString() {
    return $this->name;
  }

  public function __get($name) {
    echo "The variable " . $name . " is being accessed\n";
    return $this->$name;
  }

  public function __set($name, $value) {
    echo "The variable " . $name . " is being set to " . $value . "\n";
    $this->$name = $value;
  }

}