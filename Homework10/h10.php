<?php

//Разбиваем строку в массив по разделителю '-':
$arr = explode('-', '31-12-2020');
//Получим дату в нужном формате (масивы):
echo $arr[2] . '.' . $arr[1] . '.' . $arr[0] . "<br>";


$words = explode(' ', 'london is the capital of great britain');
$str = '';
foreach ($words as $word) {
    $str = $str . ucfirst($word) . ' ';
}
echo $str . '<br>';

$password = '11233';
if (strlen($password) > 7 && strlen($password) < 11) {
    echo "Pass ok";
} else echo "pass not ok" . '<br>';

$wordss = '1a2b3c4b5d6e7f8g9h0';
$wordss = preg_replace('/[0-9]+/', '', $wordss);
echo $wordss;