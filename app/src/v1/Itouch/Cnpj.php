<?php

	namespace App\v1\Itouch;

	use Slim\Http\Request;
	use Slim\Http\Response;

	class Cnpj {

		public static function main($request, $response) {
			global $app;
			$container = $app->getContainer();
			$container->logger->addInfo("Itouch\Cnpj::main linha 13");
			$data = array('pagina' => 'consultar cnpj');

			return $response->withJson($data);
		}

		public static function run($request, $response, $args) {
			$cnpj = $args['cnpj'];
			global $app;

			$container = $app->getContainer();
			$container->logger->addInfo("Itouch\Cnpj::run linha 24", $args);
			$data = array('pagina' => 'consultar cnpj get', 'cnpj' => $cnpj);
			
			return $response->withJson($data);
		}

	}
