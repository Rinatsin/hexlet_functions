<?php
/*
Реализуйте функцию slugify самостоятельно, не прибегая к
\Funct\Strings\slugify. Преобразования, которые она должна
делать:

-Приводить к нижнему регистру все символы в строке
-Удалять все пробелы
-Соединять слова с помощью дефисов

slugify(''); // ''
slugify('test'); // 'test'
slugify('test me'); // 'test-me'
slugify('La La la LA'); // 'la-la-la-la'
slugify('O la      lu'); // 'o-la-lu'
slugify(' yOu   '); // 'you'
*/

namespace hexlet_functions\slugify;

use Funct;

function slugify(string $str)
{
	$lower = Funct\Strings\toLower($str);
	$arr = explode(" ", $lower);
	$compactArray = Funct\Collection\compact($arr);
	$result = implode('-', $compactArray);
	return $result;
}
