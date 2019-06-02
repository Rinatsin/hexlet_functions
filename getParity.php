<?php
/*
Реализуйте функцию getSameParity, которая принимает на вход
список и возвращает новый, состоящий из элементов, у которых
такая же четность, как и у первого элемента входного списка.

<?php

getSameParity([]); // => []
getSameParity([-1, 0, 1, -3, 10, -2]); // => [-1, 1, -3]
*/

namespace hexlet_functions\getParity;

// BEGIN (write your solution here)
function isEven($value)
{
	return $value % 2 === 0;
}

function getSameParity(array $list)
{
	return array_values(array_filter($list, function ($item) use ($list) {
		return isEven($list[0]) ? isEven($item) : !isEven($item);
	}));
}
