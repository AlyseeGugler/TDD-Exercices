<?php
namespace App\Chapter9;
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
class Franc extends Money
{
    public function __construct($amount, string $currency){
        $this->amount = $amount;
        $this->currency = $currency;
    }
    public function times(int $multiplier) :Money{
        return Money::franc($this->amount * $multiplier);
    }

    public function currency() :string{
        return $this->currency;
    }
}
