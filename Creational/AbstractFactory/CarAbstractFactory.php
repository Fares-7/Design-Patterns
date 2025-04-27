<?php


namespace Creational\AbstractFactory;


class CarAbstractFactory 
{
    private float $price = 0.0;
    private float $tax = 100000;

    public function __construct(float $price, float $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function createBMW(): BMW
    {
        return new BMW($this->price);
    }

    public function createBENZ(): BENZ
    {
        return new BENZ($this->price, $this->tax);
    }
}