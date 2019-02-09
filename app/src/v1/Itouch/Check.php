<?php

namespace App\v1\Itouch;

use Slim\Http\Request;
use Slim\Http\Response;

class Check {

	public static function main($request, $response) {
		global $app;
		$container = $app->getContainer();
		$container->logger->addInfo("Itouch\Check::main linha 13");
		$data = array('pagina' => 'funcao Check session...');

		return $response->withJson($data);
	}
	
	//funcao check cookie
	
}



