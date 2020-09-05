<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\CodeeasyGerenciadorDeLojas\LojasDAO;
use App\Models\MySQL\CodeeasyGerenciadorDeLojas\LojaModel;
use Slim\Container;

final class LojaController
{
    /** @var LojasDAO $lojasDAO */
    private $lojasDAO;

    public function __construct(Container $container)
    {
        $this->lojasDAO = $container->offsetGet(LojasDAO::class);
    }

    public function getLojas(Request $request, Response $response, array $args): Response
    {
        $lojas = $this->lojasDAO->getAllLojas();
        $response->getBody()->write(
            json_encode(
                $lojas,
                JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
            )
        );

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }

    public function insertLoja(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();
        $loja->setNome($data['nome'])
            ->setEndereco($data['endereco'])
            ->setTelefone($data['telefone']);
        $lojasDAO->insertLoja($loja);

        $response = $response->withJson([
            'message' => 'Loja inserida com sucesso!'
        ]);

        return $response;
    }

    public function updateLoja(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();
        $loja->setId((int)$data['id'])
            ->setNome($data['nome'])
            ->setEndereco($data['endereco'])
            ->setTelefone($data['telefone']);
        $lojasDAO->updateLoja($loja);

        $response = $response->withJson([
            'message' => 'Loja alterada com sucesso!'
        ]);

        return $response;
    }

    public function deleteLoja(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getQueryParams();

        $lojasDAO = new LojasDAO();
        $id = (int)$queryParams['id'];
        $lojasDAO->deleteLoja($id);

        $response = $response->withJson([
            'message' => 'Loja excluída com sucesso!'
        ]);

        return $response;
    }
}
