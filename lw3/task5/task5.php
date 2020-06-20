<?php
    function surveyInfo($file)
    {
        if (file_exists('../data/' . $file . '.txt'))
        {
            $fileStrs = file('../data/' . $file . '.txt');
            for ($i = 0; $i < 4; $i++)
            {
                echo $fileStrs[$i];
            };
        }
        else
        {
            echo 'Такого файла не существует';
        }
        return null;
    }
    
    function getGetParameter(string $param): ?string
    {
        return $_GET["$param"] ?? null;
    }

    header("Content-Type: text/plain");
    $email = getGetParameter('email');
    echo ($email === null) ? 'Параметра \'email\' нет' : surveyInfo($email);
?>