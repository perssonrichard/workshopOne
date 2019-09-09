<?php

require_once("Functions.php");

// Render the main content
class View {
    
    private $funcs = new MetricFunctions($this->textInput);

    private $textInput = "";

    public function __construct(string $text) {
        $this->textInput = $text;
    }
    
     function show() {
        // Should return a view depending on if there is a file or not.
        if (strlen($this->textInput) > 0) {

            return $this->funcs->runMetrics();
        }        
    }

    function showMetrics () {
        $this->numberOfChars = $this->countChars();

        return $this->metricsDataResults = "
        <ul>
            <li> Number of characters: $this->numberOfChars </li>
        </ul>
        ";
    }
}