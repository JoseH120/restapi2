<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

// use \App\Libraries\CustomOauthStorage;
use \App\Libraries\Oauth;
use \OAuth2\Request;
use \OAuth2\Response;

class OauthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        $oauth = new Oauth();
        $request = Request::createFromGlobals();
        $response = new Response();
        if (!$oauth->server->verifyResourceRequest($request)) {
            $oauth->server->getResponse()->send();
            die();
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here

    }
}
