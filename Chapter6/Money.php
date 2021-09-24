<?php
/**
 * Author: algugler
 * Date de création: 24.09.2021
 * Description:
 **/

namespace App\Chapter6;

class Money
{
    protected $amount;
    public function __construct($amount){
        $this->amount = $amount;
    }
    public function equals(Money $money) :bool{
        return $this->amount == $money->amount;
    }
}
