<?php
namespace Combinations\Algorithm;

use Combinations\Result;

class Recursive implements Algorithm
{
    /**
     * @param $fieldsCount
     * @param $chipCount
     * @return Result
     */
    public function generateCombinations($fieldsCount, $chipCount)
    {
        return new Result([]);
    }
}