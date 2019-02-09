<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->group('/v1', function() {

	$this->group('/pesquisar', function() {
		$this->get('/cpf', 'App\v1\Itouch\Cpf::main');
		$this->get('/cpf/{cpf:[0-9]{11}}', 'App\v1\Itouch\Cpf::run');

		$this->get('/cnpj', 'App\v1\Itouch\Cnpj::main');
		$this->get('/cnpj/{cnpj:[0-9]{14}}', 'App\v1\Itouch\Cnpj::run');

		$this->get('/telefone',	'App\v1\Itouch\Telefone::main');
		$this->get('/endereco',	'App\v1\Itouch\Endereco::main');
		$this->get('/cep',		'App\v1\Itouch\Cep::main');
		$this->get('/email',	'App\v1\Itouch\Email::main');
		$this->get('/nb',		'App\v1\Itouch\Nb::main');
	});

	$this->get('/debug',	'App\v1\Controllers\Debug::main');
	$this->get('/',			'App\v1\Controllers\App::index');
	$this->get('/Login',	'App\v1\Controllers\App::login');
	$this->get('/RecSenha',	'App\v1\Controllers\App::recsenha');
	$this->get('/Contato',	'App\v1\Controllers\App::contato');

});
