<?php
	
	namespace App\v1\Itouch;
	
	use Slim\Http\Request;
	use Slim\Http\Response;
	
	class Endereco {
		
		public static function main($request, $response) {
			global $app;
			$container = $app->getContainer();
			$container->logger->addInfo("Itouch\Endereco::main linha 13");
			$data = array('pagina' => 'consultar endereco');
			
			return $response->withJson($data);
		}
	}
