<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/
namespace App\Chapter14\tests;
use App\Chapter14\Money;
use PHPUnit\Framework\TestCase;
use App\Chapter14\Bank;
use App\Chapter14\Sum;

class multiCurrencyMoneyTest extends TestCase
{
    public function testDollarMultiplication() {
        $five = Money::dollar(5);
        self::assertEquals(new Money(10, "USD"),$five->times(2));
        self::assertEquals(new Money(15, "USD"),$five->times(3));
    }

    /** Triangulation */
    public function testEquality() {
        self::assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        self::assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        self::assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    public function testCurrency() {
        self::assertEquals("USD", Money::dollar(1)->currency());
        self::assertEquals("CHF", Money::franc(1)->currency());
    }

    public function testSimpleAddition() {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, "USD");
        self::assertEquals(Money::dollar(10), $reduced);
    }
    public function testPlusReturnsSum() {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        self::assertEquals($five, $sum->augend);
        self::assertEquals($five, $sum->addend);
    }

    public function testReduceSum() {
        $sum = new Sum(Money::dollar(3), Money::dollar(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, "USD");
        self::assertEquals(Money::dollar(7), $result);
    }

    public function testReduceMoney() {
        $bank = new Bank();
        $result = $bank->reduce(Money::dollar(1),"USD");
        self::assertEquals(Money::dollar(1),$result);
    }

}
