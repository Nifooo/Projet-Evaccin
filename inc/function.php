<?php

///////////////////////////////////////
// FONCTION DE CLEAN
///////////////////////////////////////

function clean($string) {
    $cleaner = trim(strip_tags($string));
    return $cleaner; }


function debug($tableau) {
    echo '<pre>'; print_r($tableau); echo '</pre>';
}

