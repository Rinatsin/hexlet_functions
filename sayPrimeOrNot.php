<?php
/*
Реализуйте функцию sayPrimeOrNot, которая проверяет переданное число на
простоту и печатает на экран yes или no.

sayPrimeOrNot(5); // => yes
sayPrimeOrNot(4); // => no

Подсказки

Цель этой задачи — научиться отделять чистый код от кода с побочными
эффектами.

Для этого выделите процесс определения того, является ли число простым,
в отдельную функцию, возвращающую логическое значение. Это функция, с
помощью которой мы отделяем чистый код от кода, интерпретирующего
логическое значение (как 'yes' или 'no') и делающего побочный эффект
(печать на экран).
*/

namespace Hexlet_functions\Prime;

function sayPrimeOrNot($num)
{
	simple($num) ? print_r('yes') : print_r('no');
}

function simple($num)
{
	if ($num <= 1) {
		return false;
	}
	for ($i = 2; $i < $num; $i++) {
		if (($num % $i) === 0) {
		return false;
		}
	}
	return true;
}
 
print_r(sayPrimeOrNot(5));