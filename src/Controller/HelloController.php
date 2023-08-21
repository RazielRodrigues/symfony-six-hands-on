<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{



    public function index()
    {
        return new Response('Hello world!');
    }
}
