<?php
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
namespace App\Chapter1\tests;
use App\Chapter1\Dollar;
use PHPUnit\Framework\TestCase;

class multiCurrencyMoneyTest extends TestCase
{
    public function testMultiplication(){
        $five = new Dollar(5);
        $five->times(2);
        self::assertEquals(10,$five->amount);
    }

}
