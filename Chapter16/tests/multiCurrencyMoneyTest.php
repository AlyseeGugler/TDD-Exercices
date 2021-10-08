<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/
namespace App\Chapter16\tests;
use App\Chapter16\Expression;
use App\Chapter16\Money;
use PHPUnit\Framework\TestCase;
use App\Chapter16\Bank;
use App\Chapter16\Sum;

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

    public function testReduceMoneyDifferentCurrency() {
        $bank = new Bank();
        $bank->addRate("USD","CHF",3);
        $bank->addRate("CHF", "USD", 2);
        $result = $bank->reduce(Money::franc(2),"USD");
        self::assertEquals(Money::dollar(1),$result);
    }

    public function testIdentityRate() {
        self::assertEquals(1, (new Bank())->rate("USD","USD"));
    }

    public function testMixedAddition() {
        $fiveBucks = Money::dollar(5);
        $tenFrancs = Money::franc(10);
        $bank = new Bank();
        $bank->addRate("CHF", "USD", 2);
        $result = $bank->reduce($fiveBucks->plus($tenFrancs),"USD");
        self::assertEquals(Money::dollar(10), $result);
    }
}
