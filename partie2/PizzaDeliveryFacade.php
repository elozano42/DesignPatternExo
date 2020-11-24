<?php 

class PizzaDeliveryFacade 
{
    protected $pizzaDelivery;

    public function __construct(PizzaDelivery $delivery)
    {
        $this->pizzaDelivery = $delivery;
    }

    public function iWantPizza($type)
    {
        $this->pizzaDelivery->selectPizza($type);
        {
            $this->pizzaDelivery->selectPizza($type);
            $this->pizzaDelivery->telephoneToTheRestaurant();
            $this->pizzaDelivery->getPizza();
            $this->pizzaDelivery->eatPizza();
        }
    }
}
