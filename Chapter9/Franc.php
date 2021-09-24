<?php
namespace App\Chapter9;
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
class Franc extends Money
{
    public function __construct($amount){
        $this->amount = $amount;
    }
    public function times(int $multiplier) :Money{
        return new Franc($this->amount * $multiplier);
    }
}
