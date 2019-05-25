<?php
/*
Реализуйте функцию getGirlFriends, которая принимает
на вход список пользователей и возвращает плоский список
подруг всех пользователей (без сохранения ключей).
Друзья каждого пользователя хранятся в виде массива в
ключе friends. Пол доступен по ключу gender и может
принимать значения male или female.

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
	['name' => 'Rob', 'friends' => [
		['name' => 'Taywin', 'gender' => 'male']
	]],
];

getGirlFriends($users);
# => Array (
#      ['name' => 'Mira', 'gender' => 'female'],
#      ['name' => 'Aria', 'gender' => 'female'],
#      ['name' => 'Keit', 'gender' => 'female']
# )
*/

namespace Hexlet_Functions\getGirlFriends;

use function \Funct\Collection\flatten;

function getGirlFriends(array $users)
{
	$friends = array_map(function ($user) {
		return $user['friends'];
	}, $users);
	$flatFriends = flatten($friends);
	$girlfriends = array_filter($flatFriends, function ($gen) {
		return $gen['gender'] === 'female';
	});
	return array_values($girlfriends);
}
