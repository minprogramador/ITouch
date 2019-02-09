<?php
	
	namespace App\v1\Itouch;
	
	use Slim\Http\Request;
	use Slim\Http\Response;
	
	class Nb {
		
		public static function main($request, $response) {
			global $app;
			$container = $app->getContainer();
			$container->logger->addInfo("Itouch\Nb::main linha 13");
			$data = array('pagina' => 'consultar nb');
			
			return $response->withJson($data);
		}
	}
