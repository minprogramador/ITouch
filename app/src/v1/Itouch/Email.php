<?php
	
	namespace App\v1\Itouch;
	
	use Slim\Http\Request;
	use Slim\Http\Response;
	
	class Email {

		public static function main($request, $response) {
			global $app;
			$container = $app->getContainer();
			$container->logger->addInfo("Itouch\Email::main linha 13");
			$data = array('pagina' => 'consultar email');
			
			return $response->withJson($data);
		}
	}
