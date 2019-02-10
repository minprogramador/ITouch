<?php

namespace App\v1\Config;

use Slim\Http\Request;
use Slim\Http\Response;

class Logs {
	
	public static function index(Request $request, Response $response) {
		global $app;
		$data = array('pagina' => 'index');
		return $response->withJson($data);
	}

	public static function main(Request $request, Response $response) {
		global $app;
		$log = file_get_contents('../logs/app_'. date("Y-m-d"). '.log');
		$logs = explode("\n", $log);
		$dados = [];
		
		foreach($logs as $lg) {
			$lgok 	 = explode(" ", $lg);
			$data 	 = $lgok[0];
			$hora 	 = $lgok[1];
			$tipo 	 = $lgok[2];
			$msg	 = $lgok[3];
			$args 	 = $lgok[4];
			$headers = $lgok[5];
			if($tipo != null) {
				$rsok = [
					'data' => $data . ' '. $hora,
					'tipo' => $tipo,
					'msg'  => $msg,
					'args' => $args,
					'headers' => json_decode($headers, true)
				];
				array_push($dados, $rsok);
			}
		}

		$data = ['logs' => $dados];
		return $response->withJson($data);
	}
		
}
