<?php

namespace App\v1\Itouch;

class Cpf {

	public static function main($request, $response) {
		global $app;
		$container = $app->getContainer();
		$container->logger->Info("consulta cpf main");
		$data = array('pagina' => 'consultar cpf main');

		return $response->withJson($data);
	}

	public static function run($request, $response, $args) {
		$cpf = $args['cpf'];
		global $app;

		$container = $app->getContainer();
		$container->logger->info("consultar cpf");
		$data = array('pagina' => 'consultar cpf', 'cpf' => $cpf);

		return $response->withJson($data);
	}

}
