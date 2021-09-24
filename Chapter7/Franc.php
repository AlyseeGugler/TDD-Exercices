<?php
namespace App\Chapter7;
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
class Franc extends Money
{
    public function times(int $multiplier) :Franc{
        return new Franc($this->amount * $multiplier);
    }
}
