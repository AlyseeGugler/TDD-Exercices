<?php
namespace App\Chapter9;
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
class Dollar extends Money
{
    public function __construct($amount){
        $this->amount = $amount;
    }
    public function times(int $multiplier) :Money{
        return new Dollar($this->amount * $multiplier);
    }
}
