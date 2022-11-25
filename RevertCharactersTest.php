<?php
include "RevertCharacters.php";

/**
 * Проверка корректности инвертирования строки
 * @return string "passed" - если все проверки прошли успешно
 *                "failed" - если проверки завершились ошибкой
 */

function revertCharactersTest (){

    $str = array("Привет! Как дела?", "", "Hello - Здравствуйте!");
    $revert_str = array("?алед каК !тевирП", "", "!етйувтсвардЗ - olleH");

    for ($i = 0; $i == (count($str) - 1); $i++) {
        if ($revert_str[$i] !== revertCharacters($str[$i]))
            return "failed";
    }
    return "passed";
}

echo revertCharactersTest() . "<br>";
$str = 'Hello - Здравствуйте!';
echo "<h1>" . $str . "<br>" . PHP_EOL;
echo revertCharacters($str);
