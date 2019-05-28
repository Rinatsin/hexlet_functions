<?php
/*
Реализуйте функцию getFreeDomainsCount, которая принимает на вход
список емейлов, а возвращает количество емейлов, расположенных на
каждом бесплатном домене. Список бесплатных доменов хранится в
константе FREE_EMAIL_DOMAINS.

<?php

$emails = [
	'info@gmail.com',
        'info@yandex.ru',
	'info@hotmail.com',
	'mk@host.com',
	'support@hexlet.io',
	'key@yandex.ru',
	'sergey@gmail.com',
	'vovan@gmail.com',
	'vovan@hotmail.com'
	];

getFreeDomainsCount($emails);
# => Array (
#     'gmail.com' => 3
#     'yandex.ru' => 2
#     'hotmail.com' => 2
#  )
*/

namespace App\Emails;

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

function getFreeDomainsCount($emails)
{
	$hosts = array_map(function ($email) {
		return parse_url('http://' . $email, PHP_URL_HOST);
		}, $emails);
		    
	$freeEmails = array_filter($hosts, function ($host) {
		return in_array($host, FREE_EMAIL_DOMAINS) ? true : false;
		});

	return array_reduce($freeEmails, function ($acc, $host) {
		if (!array_key_exists($host, $acc)) {
		$acc[$host] = 1;
		} else {
		$acc[$host] += 1;
		}

		return $acc;
		}, []);
}
