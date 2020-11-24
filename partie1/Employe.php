<?php

abstract class Employe
{
  public $name;
  public $lastname;
  public $age;
  public $year;

  public function __construct($name, $lastname, $age, $year)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->year = $year;
  }
  abstract function getSalary();
}

class Salesman extends Employe
{
  public $ca;

  public function __construct($name, $lastname, $age, $year, $ca) {
    parent::__construct($name, $lastname, $age, $year);
    $this->ca = $ca;
  }
  function getSalary() {
    return ($this->ca * 0.2) + 400;
  }
}

class Representant extends Employe
{
  public $ca;

  public function __construct($name, $lastname, $age, $year, $ca) {
    parent::__construct($name, $lastname, $age, $year);
    $this->ca = $ca;
  }
  function getSalary() {
    return ($this->ca * 0.2) + 800;
  }
}

class Producer extends Employe
{
  public $nbUnits;

  public function __construct($name, $lastname, $age, $year, $nbUnits) {
    parent::__construct($name, $lastname, $age, $year);
    $this->nbUnits = $nbUnits;
  }
  function getSalary() {
    return $this->nbUnits * 5;
  }
}

class Wharehouseman extends Employe
{
  public $nbHour;

  public function __construct($name, $lastname, $age, $year, $nbHour) {
    parent::__construct($name, $lastname, $age, $year);
    $this->nbHour = $nbHour;
  }
  function getSalary() {
    return $this->nbHour * 65;
  }
}

class ProducerWithRisk extends Producer
{
  public $nbUnits;
    
  function getSalary() {
    return parent::getSalary() + 200;
  }
}

class WharehousemanWithRisk extends Wharehouseman
{
  public $nbHour;

  function getSalary() {
    return parent::getSalary() + 200;
  }
}