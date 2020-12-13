<?php

// Получить содержимое файла в виде массива. В данном примере мы используем
// обращение по протоколу HTTP для получения HTML-кода с удаленного сервера.
function one( )
{
    $lines = file('BD.txt');


// Осуществим проход массива и выведем номера строк и их содержимое в виде HTML-кода.
    $users = [];
    foreach ($lines as $line) {
        $arr = explode(' ', $line);
        $users[] = ["login" => $arr[1], "name" => $arr[0], "pass" => $arr[2], "mail" => $arr[3],
            "lang" => $arr[4]];
    }
    return filter($users);
}