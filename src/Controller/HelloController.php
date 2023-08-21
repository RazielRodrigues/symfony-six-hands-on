<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{

    private array $messages = [
        'chama amigo!',
        'ta ligado!',
        'é nois'
    ];

    // ROTA NORMAL E COM PRIORIDADE
    #[Route('/hello', name: 'app_hello_world', priority: 2)]
    public function index2($limit): Response
    {
        return new Response('Hello world!');
    }

    // ROTA COM PARAMETRO OPCIONAL
    #[Route('/{limit<\d+>?3}', name: 'app_index')]
    public function index($limit): Response
    {
        return new Response(implode(', ', array_slice($this->messages, 0, $limit)));
    }

    // ROTA COM PARAMETRO OBRIGATORIO
    #[Route('/messages/{id<\d+>}', name: 'app_show_one')]
    public function showOne(int $id): Response
    {
        return new Response($this->messages[$id], 200);
    }
}
