<?php

namespace Combinations\Algorithm;

use Combinations\Result;
use Kieranajp\Combinator\Combinator;

class External implements Algorithm
{
    public function generateCombinations($fieldsCount, $chipCount)
    {
        $array = [];

        for($i = 0; $i < $fieldsCount; $i++) {
            $array[] = $i;
        }

        $combinator = new Combinator($array, $chipCount);
        $combinations = [];
        foreach($combinator as $combination){
            $result = [];
            for($i = 0; $i < $fieldsCount; $i++) {
                $result[$i] = 0;
                if (in_array($i, $combination)) {
                    $result[$i] = 1;
                }
            }
            $combinations[] = $result;
        }

        return new Result($combinations);
    }
}