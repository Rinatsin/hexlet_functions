<?php
/*
Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов. Если функции не передать ни одного аргумента, то она должна вернуть null. 
*/

namespace App\Math;

function average(...$arg)
{
	if (!empty($arg)) {
		return array_sum($arg) / count($arg);
	} else {
		return null;
	}
}
