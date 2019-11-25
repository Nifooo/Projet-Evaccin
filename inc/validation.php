<?php

//Validation email
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

//Validation password
function passValidation($err, $value, $key, $min, $max, $empty = true)
{
    if (!empty($value)){
        if (mb_strlen($value) <= $min){
            $err[$key] = 'Min'. $min . 'caractères';
        } elseif (mb_strlen($value) >= $max){
            $err[$key] = 'Max' . $max . 'caracteres';
        }
        elseif(!preg_match("#[0-9]+#",$value)) {
            $err[$key] = "Votre mot de passe doit contenir au moins un chiffre !";
        }
    } else{
        if($empty) {
            $err[$key] = 'Veuillez renseigner ce champ';
        }
    }
    return $err;
}


