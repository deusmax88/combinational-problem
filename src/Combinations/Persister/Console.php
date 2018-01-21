<?php

namespace Combinations\Persister;

use Combinations\Result;

class Console implements Persister
{
    public function persist(Result $result)
    {
        if ($result->count() < 10) {
            $contents = "менее 10 вариантов";
        }
        else {
            $contents = $result->count()."\n";
            foreach($result->getCombinations() as $combination){
                $contents .= join(",", $combination)."\n";
            }
        }


        echo $contents;
    }
}