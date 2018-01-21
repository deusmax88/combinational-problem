<?php

namespace Combinations\Algorithm;

use Combinations\Result;

interface Algorithm
{
    /**
     * @param $fieldsCount
     * @param $chipCount
     * @return Result
     */
    public function generateCombinations($fieldsCount, $chipCount);
}