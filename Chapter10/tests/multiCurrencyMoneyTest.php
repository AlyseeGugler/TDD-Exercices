<?php
/**
 * Author: algugler
 * Date de création: 24.09.2021
 * Description:
 **/
namespace App\Chapter10\tests;
use App\Chapter10\Money;
use App\Chapter10\Franc;
use PHPUnit\Framework\TestCase;

class multiCurrencyMoneyTest extends TestCase
{
    public function testDollarMultiplication(){
        $five = Money::dollar(5);
        self::assertEquals(Money::dollar(10),$five->times(2));
        self::assertEquals(Money::dollar(15),$five->times(3));
    }

    public function testFrancMultiplication(){
        $five = Money::franc(5);
        self::assertEquals(Money::franc(10),$five->times(2));
        self::assertEquals(Money::franc(15),$five->times(3));
    }

    /** Triangulation */
    public function testEquality(){
        self::assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        self::assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        self::assertTrue((Money::franc(5))->equals(Money::franc(5)));
        self::assertFalse((Money::franc(5))->equals(Money::franc(6)));
        self::assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    public function testCurrency(){
        self::assertEquals("USD", Money::dollar(1)->currency());
        self::assertEquals("CHF", Money::franc(1)->currency());
    }

    public function testDifferentClassEquality() {
        self::assertTrue((new Money(10, "CHF"))->equals(new Franc(10, "CHF")));
    }

}
