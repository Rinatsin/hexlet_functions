<?php
/*
Реализуйте анонимную функцию, которая принимает на вход строку и возвращает ее последний символ (или null если строка пустая). Запишите созданную функцию в переменную $last.

$last(''); // => null
$last('pow'); // => w
$last('kids'); // => s
*/

namespace hexlet_functions\last.php;

function run(string $text)
{
	$last = function ($text) {
	return $text !== '' ? $text[strlen($text) - 1] : null ;
	};
	return $last($text);
}
