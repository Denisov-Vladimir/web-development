<?php
    header("Content-Type: text/plain");
    function getGetParameter($param)
    {
        return $_GET["$param"] ? $_GET["$param"] : null;
    }
    
    $email = getGetParameter("email");
    if ($email === null)
        echo 'Отсутсвует параметр \'email\'';
    else
    {
        $firstName = getGetParameter('first_name');
        $lastName = getGetParameter('last_name');
        $age = getGetParameter("age");
        $file = fopen('../data/' . $email . '.txt', 'w+');
        fwrite($file, 'First_name: ' . $firstName . "\r\n");
        fwrite($file, 'Last_name: ' . $lastName . "\r\n");
        fwrite($file, 'Email: ' . $email . "\r\n");
        fwrite($file, 'Age: ' . $age . "\r\n");
    }
?>