<?php
use Slim\App;
return function (App $app) {

    //ROTAS DO WEB SITE
    $app->get('/', '\App\Controller\HomeController:home');
    $app->get('/contato-recebido', '\App\Controller\HomeController:contato_recebido');


    $app->post('/enviar-formulario', '\App\Controller\HomeController:receber_formulario');



    $app->get('/{any}', '\App\Controller\HomeController:page');
};
