<?php 


class PriceBuilder 
{ 
    public $price; 

    public $salary = false; 
    public $independant = false; 

    public function __construct(int $price)
    {
        $this->size = $price;
    }

    public function addSalary()
    {
        $this->salary = true; 
        return $this; 
    }

    public function addIndependant()
    {
        $this->independant = true; 
        return $this; 
    }


}