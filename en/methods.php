<?php

declare(strict_types = 1);

$methods = [
	'send_code'=>[
		'description'=>'Send the confirmation code to the given phone number',
		'note'=>null,
		'usable'=>[
			'users'=>true,
			'bots'=>false
		],
		'arguments'=>[
			'phone_number'=>[
				'types'=>['string'],
				'require'=>true,
				'default'=>null,
				'description'=>'The phone to which the code will be sent'
			],
			'...settings'=>[
				'types'=>['mixed'],
				'optional'=>true,
				'description'=>'Any additional parameters you give will be passed to the [codeSettings](types/codeSettings.md) construct'
			],
		],
		'returns'=>'An instance of [SentCode](returns/auth/sentCode.md)',
		'example'=><<<'PHP'
$client->send_code(phone_number : '+1234567890');

$client->send_code(phone_number : '+8884567890',unknown_number : true);
PHP
	],
];

?>