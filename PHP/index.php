<html>
    <head>
    </head>

    <body>

        <?php 

            //variaveis
            $nome = "Júlia Gomes";
            $idade = 25;
            $peso = 57;
            //se for true, aparece 1 na impressão, se for false, não aparece nada.
            $fuma = false;

            //concatenação
            echo "Olá, $nome, tudo bem??";
            //echo "Olá, '.$nome.', tudo bem??';
        ?>

        <h1>Ficha Cadastral</h1>
        <br>
        <p>Nome: <?= $nome?></p>
        <p>Idade: <?= $idade?></p>
        <p>Peso: <?= $peso?></p>
        <p>Fumante: <?= $fuma ?></p>

    </body>

</html>