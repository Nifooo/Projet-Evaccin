<?php

//Validation email
function emailValidation($err, $email, $key)
{
    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err[$key] = 'Le mail nest pas valide';
        }
    } else {
        $err[$key] = 'Veuillez renseigner ce champ';
    }

    return $err;
}

//Validation password
function passValidation($err, $value, $key, $min, $max, $empty = true)
{
    if (!empty($value)) {
        if (mb_strlen($value) <= $min) {
            $err[$key] = 'Min' . $min . 'caractères';
        } elseif (mb_strlen($value) >= $max) {
            $err[$key] = 'Max' . $max . 'caracteres';
        } elseif (!preg_match("#[0-9]+#", $value)) {
            $err[$key] = "Votre mot de passe doit contenir au moins un chiffre !";
        }
    } else {
        if ($empty) {
            $err[$key] = 'Veuillez renseigner ce champ';
        }
    }
    return $err;
}

function textValid($err, $value, $key, $min, $max, $empty = true)
{
    if (!empty($value)) {
        if (mb_strlen($value) <= $min) {
            $err[$key] = 'Min ' . $min . ' caractères';
        } elseif (mb_strlen($value) >= $max) {
            $err[$key] = 'Max' . $max . 'caracteres';
        } elseif (!preg_match("#^\D+$#", $value)) {
            $err[$key] = 'Ne doit contenir que des lettres';
        }
    } else {
        if ($empty) {
            $err[$key] = 'Veuillez renseigner ce champ';
        }
    }
    return $err;
}

function cpValid($err, $value, $key)
{
    if (!empty($value)) {
        if (!preg_match("#^[0-9]{5}$#", $value)) {
            $err[$key] = ' Veuillez entrer un code postal valide';
        }
    } else {
        $err[$key] = 'Veuillez renseigner ce champ';
    }
    return $err;
}
