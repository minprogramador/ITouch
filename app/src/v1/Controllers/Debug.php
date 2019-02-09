<?php

namespace App\v1\Controllers;

use App\v1\Controllers\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class Debug extends Controller {

	public static function main($request, $response) {
		global $app;
		$container = $app->getContainer();
		$container->logger->addInfo(
									"controllers\debug::main linha 14",
									[
										"vai" => "demonio",
										"status" => true
									]
								);
		//info
		
		//monolog é maneiro!!!

//		$container->logger->info('This is a log! ^_^ ');
		$container->logger->warning('This is a log warning! ^_^ ');
		$container->logger->error('This is a log error! ^_^ ');
		$container->logger->addCritical('isso é um erro critico!');


		$data = array('pagina' => 'debug namespace app\v1\Controllers\Debug ');
		return $response->withJson($data);
	}
}
