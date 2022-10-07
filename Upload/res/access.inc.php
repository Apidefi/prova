<?php

// Users data
$imSettings['access']['users'] = array(
	'ale@gmail.com' => array(
		'id' => 'uha26mei',
		'groups' => array('8ryix9y5'),
		'firstname' => 'Admin',
		'lastname' => '',
		'password' => '$2a$11$ksFKMzeq2wvljjwHEVFk/eGUMXTUtGoGbJeJEs6Mr8GiPaG5D0ege',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => 'index.html'
	)
);

// Admins list
$imSettings['access']['admins'] = array('uha26mei');

// Page/Users permissions
$imSettings['access']['pages'] = array();

// Web registration pages
$imSettings['access']['webregistrations_gid'] = 'wj3t833g';
$imSettings['access']['entrancepage'] = 'index.html';
$imSettings['access']['dbid'] = '';
$imSettings['access']['dbtable'] = 'w5_oseohwdh_access_management';
$imSettings['access']['emailfrom'] = 'alessiodicomo3@gmail.com';

// PASSWORD CRYPT

$imSettings['access']['password_crypt'] = array(
	'encoding_id' => 'php_default',
	'encodings' => array(
		'no_crypt' => array(
			'encode' => function ($pwd) { return $pwd; },
			'check' => function ($input, $encoded) { return $input == $encoded; }
		),
		'php_default' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_DEFAULT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		),
		'csharp_bcrypt' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_BCRYPT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		)
	)
);

// End of file access.inc.php