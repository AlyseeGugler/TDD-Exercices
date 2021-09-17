<?php
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
namespace App\Chapter4\tests;
use App\Chapter4\Dollar;
use PHPUnit\Framework\TestCase;

class multiCurrencyMoneyTest extends TestCase
{
    public function testMultiplication(){
        $five = new Dollar(5);
        self::assertEquals(new Dollar(10),$five->times(2));
        self::assertEquals(new Dollar(15),$five->times(3));
    }

    /** Triangulation */
    public function testEquality(){
        self::assertTrue((new Dollar(5))->equals(new Dollar(5)));
        self::assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
