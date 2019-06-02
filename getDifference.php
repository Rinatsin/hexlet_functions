<?php
/*
Реализуйте функцию getDifference, которая принимает на вход
два массива, а возвращает массив, составленный из элементов
первого, которых нет во втором. Сделайте решение функциональным.

Эту задачу можно решить с помощью функции array_diff, но
подразумевается что вы сделаете это без ее использования.

<?php

getDifference([2, 1], [2, 3]);
// → [1]
*/

namespace hexlet_functions\getDifference;

// BEGIN (write your solution here)
function getDifference(array $arr1, array $arr2)
{
	$arrayDiff = array_filter($arr1, function ($item) use ($arr2) {
		return !in_array($item, $arr2);
		});

	        return array_values($arrayDiff);
}
