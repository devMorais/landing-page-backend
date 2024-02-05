<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;
use App\Model\ContatoModel;

final class HomeController
{
    public function home(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {

        $data['informacoes'] = array(
            'title' => 'Landing Page - DevMorais',
            'description' => 'Transformando idéias em realidade digital!',
            'author' => 'Fernando Aguiar da Costa Morais',
            'url' => URL_BASE.'',
            'site_name' => 'DevMorais',
            'image' => URL_BASE.'resources/imagens/galeria-eventos.png',
            'image_alt' => 'Projetos'
        );

        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }

    public function receber_formulario(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {

        $nome = $request->getParsedBody()['nome'];
        $telefone = $request->getParsedBody()['telefone'];
        $mensagem = $request->getParsedBody()['mensagem'];

        $campos = array(
            'nome' => $nome,
            'telefone' => $telefone,
            'mensagem' => $mensagem
        );

        if(empty($campos)){
            echo("Campos não podem ser vazios");
        }



        $contato = new ContatoModel();


        
        $contato->insertContatoModel($campos);

        header('Location:'.URL_BASE.'contato-recebido');
        exit();
    }

    public function contato_recebido(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        
        $data['informacoes'] = array(
            'title' => 'Mensagem recebida - Landing Page - DevMorais',
            'description' => 'Transformando idéias em realidade digital!',
            'author' => 'Fernando Aguiar da Costa Morais',
            'url' => URL_BASE.'contato-recebido',
            'site_name' => 'DevMorais',
            'image' => URL_BASE.'resources/imagens/galeria-eventos.png',
            'image_alt' => 'Projetos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "contato_recebido.php", $data);
    }

    public function page(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {

        $data['informacoes'] = array(
            'title' => 'Landing Page - DevMorais',
            'description' => 'Transformando idéias em realidade digital!',
            'author' => 'Fernando Aguiar da Costa Morais',
            'url' => URL_BASE.'',
            'site_name' => 'DevMorais',
            'image' => URL_BASE.'resources/imagens/galeria-eventos.png',
            'image_alt' => 'Projetos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }
}


