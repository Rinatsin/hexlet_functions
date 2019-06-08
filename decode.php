<?php
/*
Реализуйте функцию decode, которая принимает cтроку в виде
графического представления линейного сигнала и возвращает
строку с бинарным кодом.

Примеры использования:
<?php

$signal = '_|¯|____|¯|__|¯¯¯';
decode($signal); // => '011000110100'

$signal_2 = '|¯|___|¯¯¯¯¯|___|¯|_|¯';
decode($signal_2); // => '110010000100111'

$signal_3 = '¯|___|¯¯¯¯¯|___|¯|_|¯';
decode($signal_3); // => '010010000100111'

Подсказки
Символ | в строке указывает на переключение сигнала и означает,
что уровень сигнала в следующем такте, будет изменён на
противоположный по сравнению с предыдущим.

К сожалению, str_split умеет работать только с ASCII символами,
поэтому для разделения строки на символы используйте конструкцию
preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);, где
$str - строка.

В моем решении используется ссылка, лучше так не делать, лучше 
как в решении учителя обработать переключение сигнала. 
Решение учителя:

function decode($str)
{
    $symbols = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);

	$mapped = array_map(function ($key) use ($symbols) {
		if ($symbols[$key] === '|') {
			return '|';
		}
		if ($key === 0) {
			return 0;
		}
		return $symbols[$key - 1] === '|' ? 1 : 0;
	}, array_keys($symbols));

	$filtered = array_filter($mapped, function ($item) {
		return $item !== '|';
	});
        return implode('', $filtered);
}
А далее мое решение, с использованием ссылки.
*/

function decode(string $signal)
{
    $signalArr =  preg_split("//u", $signal, -1, PREG_SPLIT_NO_EMPTY);
	$check = 0;
	$binArr = array_map(function ($item) use (&$check) {
		if ($check === 1) {
			$check = 0;
			return 1;
		}
		if ($item === '|') {
			$check = 1;
		} else {
		return 0;
		};
	}, $signalArr);
	
	$filtered = array_filter($binArr, function ($item) {
		return $item !== null;
	});
	
	return implode($filtered);
}
