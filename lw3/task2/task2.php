<?php
    function checkIdentifier(string $ident): ?string
    {
        if (ctype_alpha($ident[0])){
            for ($i = 1; $i < strlen($ident); $i++)
            {
                if (!((ctype_alpha($ident[$i])) or (ctype_digit($ident[$i]))))
                    return 'NO (Есть специальные символы)';
            }
            return 'YES';     
        }
        return 'NO (Первый символ не является буквой)';         
    }
    
    function getGetParameter(string $param): ?string
    {
        return $_GET[$param] ?? null;
    }

    header("Content-Type: text/plain");
    $ident = getGetParameter('identifier');
    echo ($ident === null) ? 'Параметра \'identifier\' нет' : checkIdentifier($ident);
?>