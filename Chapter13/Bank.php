<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/

namespace App\Chapter13;

class Bank
{
    public function reduce(Expression $source, String $to) :Money{
        return Money::dollar(10);
    }
}
