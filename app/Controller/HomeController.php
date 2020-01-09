<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index()
    {
        $response = new Response(
            json_encode(['message' => 'Hello World']),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
        $response->send();
    }
}