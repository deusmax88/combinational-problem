<?php

namespace Combinations\Persister;

use Combinations\Result;

class File implements Persister
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @param Result $result
     * @return void
     */
    public function persist(Result $result)
    {
        if ($result->count() < 10) {
            $contents = "менее 10 вариантов";
        } else {
            $contents = $result->count()."\n";
            foreach($result->getCombinations() as $combination){
                $contents .= join(",", $combination)."\n";
            }
        }

        file_put_contents($this->fileName, $contents);
    }
}