<?php
    function removeExtraBlanks(string $inputText): ?string
    {
        $inputText = ltrim($inputText);
	    $inputText = rtrim($inputText);
	    $doubBlankPos = strpos($inputText, '  ');
	    while ($doubBlankPos !== false)
	    {
	        $inputText = str_replace('  ', ' ', $inputText);
	        $doubBlankPos = strpos($inputText, '  ');
	    }
        return $inputText;
    }
    
    function getGetParameter(string $param): ?string
    {
        return $_GET[$param] ?? null;
    }

    header("Content-Type: text/plain");
    $inputText = getGetParameter('text');
    echo ($inputText === null) ? 'Параметра \'text\' нет' : removeExtraBlanks($inputText);
?>