<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function peticion($metodo, $url, $parametros = [])
    {
        $cliente = new Client;
        $respuesta = null;
        try {
            $respuesta = $cliente->request($metodo, $url, $parametros);
        } catch (GuzzleException $e) { }
        return $respuesta->getBody()->getContents();
    }
}
