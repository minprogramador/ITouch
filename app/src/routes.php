<?php

$app->group('/v1', function() {

	$this->group('/config', function() {

		$this->get('/login', 	'App\v1\Config\Config::login');
		$this->get('/usuarios',	'App\v1\Config\Usuarios::main');
		$this->get('/sair',		'App\v1\Config\Config::sair');
		$this->get('/config',	'App\v1\Config\Config::main');
		$this->get('/logs',		'App\v1\Config\Logs::main');

	});

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

});
