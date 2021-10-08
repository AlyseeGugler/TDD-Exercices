<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/

namespace App\Chapter15;

use phpDocumentor\Reflection\Types\Boolean;

class Pair
{
    private $from;
    private $to;

    public function __construct(string $from, string $to){
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(Object $pair) :Boolean {
        return ($this->from == $pair->from) && ($this->to == $pair->to);
    }

    public function hashcode() {
        return 0;
    }
}
