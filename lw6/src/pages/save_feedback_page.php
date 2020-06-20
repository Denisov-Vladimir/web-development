<?php
    function saveInformation(array $args): void
    {
            $dataFile = fopen('messages/' . $args['email'] . '.txt', 'w+');
            fwrite($dataFile, 'name: ' . $args['name'] . "\r\n");
            fwrite($dataFile, 'email: ' . $args['email'] . "\r\n");
            fwrite($dataFile, 'country: ' . $args['country'] . "\r\n");
            fwrite($dataFile, 'gender: ' . $args['gender'] . "\r\n");
            fwrite($dataFile, 'message: ' . $args['message'] . "\r\n");
    }

    function saveFeedbackPage(): void
    {
        $name = preg_match("/^[а-я А-Я a-z A-Z]+$/u", getPostParameter('name')) ? getPostParameter('name') : '';
        $email = (filter_var(mb_strtolower(getPostParameter('email')), FILTER_VALIDATE_EMAIL)) ? mb_strtolower(getPostParameter ('email')) : '';
        $country = getPostParameter('country') !== '—' ? getPostParameter('country') : 'не указано';
        $gender = getPostParameter('gender') === 'man' ? 'мужской' : getPostParameter('gender') == 'woman' ? 'женский' : 'не указано';
        $message = getPostParameter('message');
        $error = 'Данное введено некоректно';
        $formInf = [
            'name' => $name,
            'email' => $email, 
            'country' => $country,
            'gender' => $gender,
            'message' => $message,
            'success' => true,
            'name_error_msg' => $name !== '' ? '' : $error,
            'email_error_msg' => $email !== '' ? '' : $error,
            'message_error_msg' => $message !== '' ? '' : $error,
        ];
        if ($name === '' || $email === '' || $message === '')
        {
            $formInf['success'] = false;
        }
        else
        {
            saveInformation($formInf);
        }    
        mainPage($formInf);
    }
?>