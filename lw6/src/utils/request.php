<?php
    function getRequestMethod(): ?string
    {
        return $_SERVER["REQUEST_METHOD"];
    }

    function getPostParameter(string $param): ?string
    {
        return isset($_POST[$param]) ? $_POST[$param] : null;
    }
?>