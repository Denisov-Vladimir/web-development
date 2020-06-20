<?php
    include __DIR__ . '\..\src\common.inc.php';
    if (getRequestMethod() === 'POST')
        saveFeedbackPage();
    else
        mainPage();
?>