<?php
/*
Реализуйте функцию getManWithLessFriends, которая принимает список
пользователей и возвращает пользователя, у которого меньше всего
друзей.

Примечания
-Если список пользователей пустой, то возвращается null
-Если в списке есть более одного пользователя с минимальным
 количеством друзей, то возвращается последний из таких пользователей

Примеры
<?php

$users = [
	['name' => 'Tirion', 'friends' => [
        	['name' => 'Mira', 'gender' => 'female'],
	        ['name' => 'Ramsey', 'gender' => 'male']
	]],
	['name' => 'Bronn', 'friends' => []],
	['name' => 'Sam', 'friends' => [
		['name' => 'Aria', 'gender' => 'female'],
		['name' => 'Keit', 'gender' => 'female']
	]],
	['name' => 'Keit', 'friends' => []],
	['name' => 'Rob', 'friends' => [
		['name' => 'Taywin', 'gender' => 'male']
	]],
];
									getManWithLessFriends($users);

// => ['name' => 'Keit', 'friends' => []];
*/

namespace App\Users;

use Funct\Collection;

// BEGIN (write your solution here)
function getManWithLessFriends($coll)
{
	if (empty($coll)) {
		return null;
	}
	$minFriends =  Collection\minValue($coll, function ($item) {
		return count($item['friends']);
	});

	return $minFriends;
}
