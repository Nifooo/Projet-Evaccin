<?php

function emailValidation($err, $email, $key)
{
    if (!empty($email)){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err[$key] = 'Le mail nest pas valide';
        }
    } else{
        $err[$key] = 'Veuillez renseigner ce champ';
    }

    return $err;
}