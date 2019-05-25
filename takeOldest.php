<?php
/*
Реализуйте функцию takeOldest, которая принимает на вход список
пользователей и возвращает самых взрослых. Количество возвращаемых
пользователей задается вторым параметром, который по-умолчанию равен
единице.

$users = [
	['name' => 'Tirion', 'birthday' => '1988-11-19'],
        ['name' => 'Sam', 'birthday' => '1999-11-22'],
	['name' => 'Rob', 'birthday' => '1975-01-11'],
	['name' => 'Sansa', 'birthday' => '2001-03-20'],
	['name' => 'Tisha', 'birthday' => '1992-02-27']
];

takeOldest($users);
# => Array (
#   ['name' => 'Rob', 'birthday' => '1975-01-11']
# )
*/
namespace App\Users;

use function \Funct\Collection\firstN;

function takeOldest(array $users, $num = 1)
{
	usort($users, function ($a, $b) {
		if (strtotime($a['birthday']) == strtotime($b['birthday'])) {
			return 0;
		}
		return strtotime($a['birthday']) > strtotime($b['birthday']) ? 1 : -1;
	});
	return firstN($users, $num);
}
