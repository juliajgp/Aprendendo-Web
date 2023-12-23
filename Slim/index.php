<?php
    require 'vendor/autoload.php';

    $app = new \Slim\App;

    $app->get('/lista/{itens:.*}', function($request, $response) {
        $itens = $request->getAttribute('itens');
        
        var_dump(explode("/", $itens));
    });

    $app->get('/usuarios[/{id}]', function($request, $response) {
        $id = $request->getAttribute('id');
        echo "lista usuarios ou ID: " . $id;
    });

    //nomear rotas
    $app->get('blog/postagens/{id}', function($request, $response) {
        echo "Listar postagens";
    })->setName("blog");

    $app->get('/meusite', function($request, $response) {
        $retorno = $this->get("router")->pathFor("blog", ["id" => "5"] );
    });


    //agrupar rotas
    $app->group('/v1', function() {
        
        $this->get('/usuarios', function() {
            echo "listagem";
        });
        $this->get('/postagem', function() {
            echo "listagem";
        });
    });

    $app->run();
?>
