<?php

namespace Combinations\Algorithm;

use Combinations\Result;

class One implements Algorithm
{
    public function generateCombinations($fieldsCount, $chipCount)
    {
        $array = [];

        for($i = 0; $i < $fieldsCount; $i++) {
            if ($i < $chipCount) {
                $array[] = 1;
            }
            else {
                $array[] = 0;
            }
        }

        return new Result([$array]);
    }
}