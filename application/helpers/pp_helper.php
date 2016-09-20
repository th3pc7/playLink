<?php

function c_text($str){
    $str = trim($str);
    if($str===''){ return null; }
    else{ return htmlspecialchars($str); }
}

function c_number($str_number,$point=2){
    if(is_numeric($str_number)){ return round(floatval($str_number),$point); }
    else{ return null; }
}