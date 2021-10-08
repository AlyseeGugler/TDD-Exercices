<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/

namespace App\Chapter15;

interface Expression
{
    public function reduce(Bank $bank,string $to);
}
