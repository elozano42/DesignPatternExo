<?php

class Staff
{
  public $employees;

  public function __construct(){}
  
  public function add($employee)
  {
    $this->employees[] = $employee;
  }

  public function displaySalaries()
  {
    foreach($this->employees as $employee) {
      echo $employee->getName() . ' ' . $employee->getSalary() . PHP_EOL;
    }
  }

  public function displayAverageSalary()
  {
    $total = 0;
    foreach ($this->employees as $employee) {
       $total += $employee->getSalary();
    }
    echo 'Salaire moyen: ' .  $total / count($this->employees) . PHP_EOL;
  }
    
}