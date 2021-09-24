<?php
namespace App\Chapter7;
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
class Dollar extends Money
{
    public function times(int $multiplier) :Dollar{
        return new Dollar($this->amount * $multiplier);
    }
}
