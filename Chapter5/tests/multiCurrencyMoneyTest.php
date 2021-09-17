<?php
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
namespace App\Chapter5\tests;
use App\Chapter5\Dollar;
use App\Chapter5\Franc;
use PHPUnit\Framework\TestCase;

class multiCurrencyMoneyTest extends TestCase
{
    public function testDollarMultiplication(){
        $five = new Dollar(5);
        self::assertEquals(new Dollar(10),$five->times(2));
        self::assertEquals(new Dollar(15),$five->times(3));
    }

    public function testFrancMultiplication(){
        $five = new Franc(5);
        self::assertEquals(new Franc(10),$five->times(2));
        self::assertEquals(new Franc(15),$five->times(3));
    }

    /** Triangulation */
    public function testEquality(){
        self::assertTrue((new Dollar(5))->equals(new Dollar(5)));
        self::assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
