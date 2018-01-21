<?php

namespace Combinations;

class Result
{
    private $combinations;

    public function __construct($combinations)
    {
        $this->combinations = $combinations;
    }

    public function count()
    {
        return count($this->combinations);
    }

    public function getCombinations()
    {
        return $this->combinations;
    }
}