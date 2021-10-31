<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try{

        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_usuarios where id = 11
        ';

        $stmt = $conexao->query($query);
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
        //caso queira numeros: FETCH_NUM
        //caso queira ambos, não passe parametros ou passa FETCH_BOTH
        //se passar FETCH_OBJ, agora é objeto e não mais array
        echo '<pre>';
        print_r($usuario);
        echo '</pre>';

        echo $usuario->nome;

        //echo $lista[2]['nome'];
        //objeto: echo $lista[1]->nome;
        

    } catch(PDOException $e){
        echo 'Erro '.$e->getCode().' Mensagem: '.$e->getMessage();
        //registrar erro
    }

?>
