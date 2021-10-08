<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/

namespace App\Chapter15;

class Money implements Expression
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(object $money) :bool {
        return $this->amount == $money->amount
            && $this->currency()==$money->currency();
    }

    static function dollar(int $amount) :Money {
        return new Money($amount, "USD");
    }

    static function franc(int $amount) :Money {
        return new Money($amount, "CHF");
    }

    public function reduce(Bank $bank, string $to) :Money{
        $rate = $bank->rate($this->currency,$to);
        return new Money($this->amount / $rate, $to);
    }

    public function times(int $multiplier) :Expression{
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency() :string {
        return $this->currency;
    }

    public function amount() :int {
        return $this->amount;
    }

    public function plus(Expression $addend) :Expression{
        return new Sum($this, $addend);
    }
}
