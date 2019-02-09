<?php

namespace App\v1\Itouch;

use Slim\Http\Request;
use Slim\Http\Response;

class Logar {

	public static function main($request, $response) {
		global $app;
		$container = $app->getContainer();
		$container->logger->addInfo("Itouch\Logar::main linha 13");
		$data = array('pagina' => 'funcao logar...');

		return $response->withJson($data);
	}
	
	//funcao para logar
	
}
