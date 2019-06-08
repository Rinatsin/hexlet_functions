<?php
/*
Реализуйте функцию enlargeArrayImage, которая принимает
изображение в виде двумерного массива и увеличивает его
в два раза.

<?php

$arr = [
	['*','*','*','*'],
        ['*',' ',' ','*'],
	['*',' ',' ','*'],
	['*','*','*','*']
];
		// ****
		// *  *
		// *  *
		// ****

enlargeArrayImage($arr);
		// ********
		// ********
		// **    **
		// **    **
		// **    **
		// **    **
		// ********
		// ********
*/
namespace hexlet_functions\enlargeImage;

// version 1

function enlargeArrayImage(array $image)
{
	$mapped = array_map(function ($item) {
		$data = array_map(function ($i) {
			return [$i, $i];
		}, $item);
		return array_merge(... $data);
	}, $image);
	$doubleMapped  = array_map(function ($i) {
		return [$i, $i];
	}, $mapped);
	return array_merge(... $doubleMapped);
}

// version 2

function duplicateEachItemInArray(array $arr)
{
	$data = array_map(function ($i) {
		return [$i, $i];
	}, $arr);
	return array_merge(... $data);
}
function enlargeArrayImage(array $image)
{
	$verticallyStretched = array_map("duplicateEachItemInArray", $image);
	return duplicateEachItemInArray($verticallyStretched);
}
