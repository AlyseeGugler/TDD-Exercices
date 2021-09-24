<?php
namespace App\Chapter10;
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
class Dollar extends Money
{
    public function __construct($amount, string $currency){
        parent::__construct($amount,$currency);
    }
    public function times(int $multiplier) :Money{
        return new Dollar($this->amount * $multiplier, $this->currency);
    }

    public function currency() :string{
        return $this->currency;
    }
}
