<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/

namespace App\Chapter14;

class Bank
{
    public function reduce(Expression $source, String $to) {
        return $source->reduce($to);
    }
}
