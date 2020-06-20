<?php
    function passwordStrength($password)
    {
        $security = 0;
        $security += 4*strlen($password);
        $inUppCase = 0;
        $inLowCase = 0;
        $digits = 0;
        for ($i = 0; $i < strlen($password); $i++)
        {
            if (ctype_upper($password[$i]))
            	$inUppCase ++;
            if (ctype_lower($password[$i]))
                $inLowCase++;
            if (ctype_digit($password[$i]))
            	$digits++;
            if (substr_count($password, $password[$i]) > 1)
                $security--;
        }
        $security += 4*$digits;
        if ($inUppCase > 0)
            $security += (2*(strlen($password)-$inUppCase));
        if ($inLowCase > 0)
            $security += (2*(strlen($password)-$inLowCase));
        if (ctype_alpha($password))
            $security -= strlen($password);
        if (ctype_digit($password))
            $security -= strlen($password);
        return $security;
    }

    function getGetParameter(string $param): ?string
    {
        return $_GET[$param] ?? null;
    }
    
    header("Content-Type: text/plain");
    $pass = getGetParameter('password');
    echo ($pass === null) ? 'Параметра \'password\' нет' : passwordStrength($pass);
?>