<?php

namespace Creational\AbstractFactory;

class BMW implements CarInterface
{
    private float $price = 0.0;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): float
    {
        return $this->price + 10000; // Adding a base price for BMW
    }
}