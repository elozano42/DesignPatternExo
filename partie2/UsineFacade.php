<?php

class UsineFacade 
{
    protected $usine;

    public function __construct(Usine $usine)
    {
        $this->usine = $usine;
    }

    public function openUsine()
    {
        $this->usine->getElectricity();
        $this->usine->turnOnLight();
        $this->usine->getCoffee();
    }

    public function closeUsine()
    {
        $this->usine->turnOffLight();
        $this->usine->turnOffElectricity();

    }
}