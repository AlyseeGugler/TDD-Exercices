<?php
namespace App\Chapter5;
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
class Franc
{
    private $amount;
    public function __construct($amount){
        $this->amount = $amount;
    }
    public function times(int $multiplier) :Franc{
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Franc $franc) :bool{
        return $this->amount == $franc->amount;
    }
}