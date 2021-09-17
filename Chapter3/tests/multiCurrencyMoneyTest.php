<?php
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
namespace App\Chapter3\tests;
use App\Chapter3\Dollar;
use PHPUnit\Framework\TestCase;

class multiCurrencyMoneyTest extends TestCase
{
    public function testMultiplication(){
        $five = new Dollar(5);
        $product = $five->times(2);
        self::assertEquals(10,$product->amount);
        $product = $five->times(3);
        self::assertEquals(15,$product->amount);
    }

    /** Triangulation */
    public function testEquality(){
        self::assertTrue((new Dollar(5))->equals(new Dollar(5)));
        self::assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
