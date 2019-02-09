<?php

namespace App\v1\Itouch;

class Cpf {

	public static function main($request, $response) {
		global $app;
		$container = $app->getContainer();
		$container->logger->addInfo("Itouch\Cpf::main linha 13");
		$data = array('pagina' => 'consultar cpf');

		return $response->withJson($data);
	}

	public static function run($request, $response, $args) {
		$cpf = $args['cpf'];
		global $app;

		$container = $app->getContainer();
		$container->logger->addInfo("Itouch\Cpf::run linha 21", $args);
		$data = array('pagina' => 'consultar cpf get', 'cpf' => $cpf);

		return $response->withJson($data);
	}

}
