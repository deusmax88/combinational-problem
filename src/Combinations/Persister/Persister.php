<?php

namespace Combinations\Persister;

use Combinations\Result;

interface Persister
{
    /**
     * @param Result $result
     * @return void
     */
    public function persist(Result $result);
}