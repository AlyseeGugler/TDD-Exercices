<?php
namespace App\Chapter10;
/**
 * Author: algugler
 * Date de création: 17.09.2021
 * Description:
 **/
class Franc extends Money
{
    public function __construct($amount, string $currency){
        parent::__construct($amount,$currency);
    }


    public function currency() :string{
        return $this->currency;
    }
}
