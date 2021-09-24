<?php
/**
 * Author: algugler
 * Date de création: 24.09.2021
 * Description:
 **/

namespace App\Chapter7;

class Money
{
    protected $amount;
    public function __construct($amount){
        $this->amount = $amount;
    }
    public function equals(object $money) :bool{
        return $this->amount == $money->amount && get_class($this)==get_class($money);
    }
}
