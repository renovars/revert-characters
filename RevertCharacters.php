<?php

/**
 * Инвертирование строки
 * @param string $str строка, которую нужно инвертировать
 * @return string $str_reverse инвертированная строка
 */

function revertCharacters($str){
    $str_reverse = '';
    $word_reverse = '';
    $up_letters = array();
    $len = mb_strlen($str);
    $str = mb_str_split($str);
    for ($i = 0;  $i < $len; $i++){
        if (preg_match('/[a-zA-Zа-яА-ЯеЁ]/u', $str[$i])){
            if (mb_strtoupper($str[$i]) === $str[$i]){
                $up_letters[] = $i;
            }
            $word_reverse = mb_strtolower($str[$i]) . $word_reverse;
        }
        else {
            $str_reverse .= $word_reverse . $str[$i];
            $word_reverse = '';
        }
    }
    $str_reverse = mb_str_split($str_reverse);
    for ($i = 0; $i < count($up_letters); $i++){
        $str_reverse[$up_letters[$i]] = mb_strtoupper($str_reverse[$up_letters[$i]]);
    }
    return implode('',$str_reverse);
}
