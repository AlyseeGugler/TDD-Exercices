<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/

namespace App\Chapter15;

class Sum implements Expression
{
    public $augend;
    public $addend;
    public function __construct(Expression $augend, Expression $addend) {
        $this->augend = $augend;
        $this->addend = $addend;
    }
    public function reduce(Bank $bank,String $to) :Money {
        $amount = ($this->augend->reduce($bank,$to))->amount() + ($this->addend->reduce($bank,$to))->amount();
        return new Money($amount, $to);
    }
    public function plus(Expression $addend) {
        return null;
    }
}
