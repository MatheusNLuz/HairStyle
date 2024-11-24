<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\HttpKernel\TerminableInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Router;

// Incluindo o autoloader do Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Configuração do Kernel Symfony
$kernel = new App\Kernel('prod', false); // Usando o kernel de produção

// Criando a requisição
$request = Request::createFromGlobals();

// Executando o Symfony Kernel
$response = $kernel->handle($request);

// Enviando a resposta
$response->send();

// Finalizando a execução
$kernel->terminate($request, $response);
