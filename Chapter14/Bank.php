<?php
/**
 * Author: algugler
 * Date de création: 01.10.2021
 * Description:
 **/

namespace App\Chapter14;

class Bank
{
    private $rates = [];

    public function reduce(Expression $source, String $to) :Money {
        return $source->reduce($this,$to);
    }
    public function rate(string $from, string $to) :int {
        if($from == $to){
            return 1;
        }
        foreach($this->rates as $rate){
            if ($rate['pair'] == new Pair($from,$to)) {
                return $rate['rate'];
            }
        }
        return false;
    }
    public function addRate(string $from, string $to, int $rate) :void {
        $this->rates[] = [
            'pair' => new Pair($from,$to),
            'rate' => $rate
        ];
    }
}
