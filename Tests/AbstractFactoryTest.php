<?php



namespace Dell\Designpattern\Tests;

use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\BMW;
use Creational\AbstractFactory\BENZ;

class AbstractFactoryTest extends TestCase
{
    public function testCarFactory()
    {
        $carFactory = new CarAbstractFactory(200000, 100000);
        
        $bmw = $carFactory->createBMW();
        $benz = $carFactory->createBENZ();
        
        $this->assertInstanceOf(BMW::class, $bmw);
        $this->assertInstanceOf(BENZ::class, $benz);
        
        // Test the price calculation
        $this->assertEquals(210000, $bmw->calculatePrice());
        $this->assertEquals(320000, $benz->calculatePrice());
    }
}