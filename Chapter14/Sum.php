<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/

namespace App\Chapter14;

class Sum implements Expression
{
    public $augend;
    public $addend;
    public function __construct(Money $augend, Money $addend){
        $this->augend = $augend;
        $this->addend = $addend;
    }
    public function reduce(String $to) :Money{
        $amount = ($this->augend)->amount() + ($this->addend)->amount();
        return new Money($amount, $to);
    }
}
