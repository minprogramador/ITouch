<?php

namespace App\v1\Config;

use Slim\Http\Request;
use Slim\Http\Response;

class Usuarios {
	
	public static function index(Request $request, Response $response) {
		global $app;
		$data = array('pagina' => 'index');
		return $response->withJson($data);
	}
	
}
