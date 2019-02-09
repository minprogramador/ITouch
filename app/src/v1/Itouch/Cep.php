<?php

namespace App\v1\Itouch;

use Slim\Http\Request;
use Slim\Http\Response;

class Cep {

	public static function main($request, $response) {
		global $app;
		$container = $app->getContainer();
		$container->logger->addInfo("Itouch\Cep::main linha 13");
		$data = array('pagina' => 'consultar cep');

		return $response->withJson($data);
	}
}
