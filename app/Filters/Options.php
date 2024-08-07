<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


class Options implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // header('Access-Control-Allow-Origin : http://localhost/restapi2/public');
        // header('Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization');
        // header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
        // $method = $_SERVER['REQUEST_METHOD'];
        // if ($method == 'OPTIONS') {
        //     die();
        // }
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here

    }
}
