<?php
namespace App\Chapter5;
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
class Dollar
{
    private $amount;
    public function __construct($amount){
        $this->amount = $amount;
    }
    public function times(int $multiplier) :Dollar{
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $dollar) :bool{
        return $this->amount == $dollar->amount;
    }
}