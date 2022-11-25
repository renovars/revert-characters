<?php

/**
 * Инвертирование строки
 * @param string $str строка, которую нужно инвертировать
 * @return string $str_reverse инвертированная строка
 */

function revertCharacters($str){
    $str_reverse = '';
    $len = mb_strlen($str);
    for ($i = $len;  $i >= 0; $i--){
        $str_reverse .= mb_substr($str, $i, 1);
    }
    return $str_reverse;
}
