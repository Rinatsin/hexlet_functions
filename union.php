<?php
/*
Реализуйте функцию union, которая находит объединение всех переданных
массивов. Функция принимает на вход от одного массива и больше. Ключи
исходных массивов не сохраняются (т.е. все значения итогового массива
заново индексируются: 0, 1, 2, ...). 

union([3]); // => [3]
union([3, 2], [2, 2, 1]); // => [3, 2, 1]
union(['a', 3, false], [true, false, 3], [false, 5, 8]); // => ['a', 3, false, true, 5, 8]
*/

namespace App\Arrays;

function union($first, ...$rest)
{
	return array_values(array_unique(array_merge($first, ...$rest))); 
}
