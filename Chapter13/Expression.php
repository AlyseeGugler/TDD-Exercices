<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/

namespace App\Chapter13;

interface Expression
{
    public function reduce(string $to);
}
