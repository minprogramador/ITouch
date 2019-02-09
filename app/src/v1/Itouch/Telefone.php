<?php
	
	namespace App\v1\Itouch;
	
	use Slim\Http\Request;
	use Slim\Http\Response;
	
	class Telefone {
		
		public static function main($request, $response) {
			global $app;
			$container = $app->getContainer();
			$container->logger->addInfo("Itouch\Telefone::main linha 13");
			$data = array('pagina' => 'consultar telefone');
			
			return $response->withJson($data);
		}
	}
