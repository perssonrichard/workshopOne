<?php

// Class with functions

class MetricFunctions {
    private $inputString = "";

    // Takes a string as a parameter.
    public function __construct(string $string)
    {
        $this->inputString = trim($string);      
    }

    //Counts characters in a string.
    function getCountedChars () {
        $count = 0;

        foreach (count_chars($this->inputString, 1) as $i) {
            $count += $i;
        }

        return $count;
    }

    function getCountedForLoops () {
        $count = 0;

        $count = substr_count($this->inputString, "for(");
        $count += substr_count($this->inputString, "for (");

        return $count;
    }

    function getCountedForEachLoops () {
        $count = 0;

        $count = substr_count($this->inputString, "foreach(");
        $count += substr_count($this->inputString, "foreach (");

        return $count;
    }
}