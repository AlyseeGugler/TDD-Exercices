<?php
/**
 * Author: algugler
 * Date de création: 24.09.2021
 * Description:
 **/

namespace App\Chapter10;

class Money
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(object $money) :bool {
        return $this->amount == $money->amount && get_class($this)==get_class($money);
    }
    static function dollar(int $amount) :Money {
        return new Dollar($amount, "USD");
    }

    static function franc(int $amount) :Money {
        return new Franc($amount, "CHF");
    }

    public function times(int $multiplier) :Money{
        return null;
    }

    public function currency() :string {
        return $this->currency;
    }
}
