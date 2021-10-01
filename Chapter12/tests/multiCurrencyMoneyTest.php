<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/
namespace App\Chapter12\tests;
use App\Chapter12\Money;
use PHPUnit\Framework\TestCase;

class multiCurrencyMoneyTest extends TestCase
{
    public function testDollarMultiplication(){
        $five = Money::dollar(5);
        self::assertEquals(new Money(10, "USD"),$five->times(2));
        self::assertEquals(new Money(15, "USD"),$five->times(3));
    }

    /** Triangulation */
    public function testEquality(){
        self::assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        self::assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        self::assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    public function testCurrency(){
        self::assertEquals("USD", Money::dollar(1)->currency());
        self::assertEquals("CHF", Money::franc(1)->currency());
    }

}
