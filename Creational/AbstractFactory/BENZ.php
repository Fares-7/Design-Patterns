<?php

namespace Creational\AbstractFactory;


class BENZ implements CarInterface 
{
    private float $price = 0.0;
    private float $tax = 0.0;

    public function __construct(float $price, float $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice(): float
    {
        return $this->price + $this->tax + 20000; // Adding a base price for BENZ
    }
    


}