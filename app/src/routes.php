<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Itouch\LoginController;

$app->group('/v1', function() {

	$this->group('/auth', function() {
		$this->get('/logar', 'App\v1\Controllers\Login::main');
	});

	$this->get('/debug',	'App\v1\Controllers\Debug::main');
	$this->get('/',			'App\v1\Controllers\App::index');
	$this->get('/Login',	'App\v1\Controllers\App::login');
	$this->get('/RecSenha',	'App\v1\Controllers\App::recsenha');
	$this->get('/Contato',	'App\v1\Controllers\App::contato');

});
