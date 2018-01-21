<?php
namespace Combinations;

use Combinations\Algorithm\Algorithm;
use Combinations\Persister\Persister;

class Generator
{
    /**
     * @var Algorithm
     */
    private $algorithm;

    /**
     * @var Persister
     */
    private $persister;

    public function __construct(Algorithm $algorithm, Persister $persister)
    {
        $this->algorithm = $algorithm;
        $this->persister = $persister;
    }

    public function generate($fieldsCount, $chipCount)
    {
        /** @var Result $result */
        $result = $this->algorithm->generateCombinations($fieldsCount, $chipCount);
        $this->persister->persist($result);
    }
}