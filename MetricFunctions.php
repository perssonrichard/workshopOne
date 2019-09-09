<?php

// Class with functions

class MetricFunctions {
    private $inputString = "";
    private $metricsDataResults = "";

    // private $metricsDataResults = array();

    private $numberOfChars;

    // Takes a string as a parameter.
    public function __construct(string $string)
    {
        $this->inputString = trim($string);      
    }

    //Counts characters in a string. Not implemented
    function countChars () {
        $count = 0;

        foreach (count_chars($this->inputString, 1) as $i) {
            $count += $i;
        }

        return $count;
    }
}