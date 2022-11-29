<?php

include "RevertCharacters.php";

/**
 * Проверка корректности инвертирования строки
 * @return string "passed" - если все проверки прошли успешно
 *                "failed" - если проверки завершились ошибкой
 */

function revertCharactersTest (){

    $str = array("Привет! Как дела?", "", "Hello - Здравствуйте!", "!", "Привет ", "¡Hola");
    $revert_str = array("Тевирп! Как алед?", "", "Olleh - Етйувтсвардз!", "!", "Тевирп ", "¡Aloh");

    for ($i = 0; $i < count($str); $i++) {
        if ($revert_str[$i] !== revertCharacters($str[$i]))
            return "failed";
    }
    return "passed";
}

echo revertCharactersTest() . "<br>";
$str = 'Привет ';
echo "<h1>" . $str . "<br>" . PHP_EOL;
echo revertCharacters($str);
