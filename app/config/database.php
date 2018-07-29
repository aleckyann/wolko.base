<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$query_builder = TRUE;

if($_SERVER['DOCUMENT_ROOT'] == '/opt/lampp/htdocs' || $_SERVER['DOCUMENT_ROOT'] == '/var/www/html') {
	$active_group = 'desenvolvimento';

} elseif($_SERVER['SERVER_NAME'] == 'YOUR-URL-PRODUCTION') {
	$active_group = 'producao';
}

$db['desenvolvimento'] = array(
		'dsn'	=> '',
		'hostname' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'sua-database',
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => TRUE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => TRUE,
		'stricton' => TRUE,
		'failover' => array(),
		'save_queries' => TRUE
);

$db['producao'] = array(
		'dsn'	=> '',
		'hostname' => 'localhost',
		'username' => '',
		'password' => '',
		'database' => '',
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => TRUE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => TRUE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
);
