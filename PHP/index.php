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
            echo "Olá, $nome, tudo bem??<br>";
            //echo "Olá, '.$nome.', tudo bem??';

            //variaveis constantes
            define('BD_URL', 'endereco_bd_dev');
            define('BD_USUARIO', 'usuario_bd_dev');
            define('BD_SENHA', 'senha_bd_dev');

            echo BD_URL . '<br>';
            echo BD_SENHA . '<br>';
            echo BD_USUARIO . '<br>';

            //if/else
            if(5 <> 6){ //5 != 6
                echo 'verdadeiro <br><hr>';
            }
            else {
                echo 'falso <br><hr>';
            }

            //operador ternario
            echo (5 != 6) ? 'sim' : 'não';
            echo '<br>';

            //casting
            $valor = 10;
            echo gettype($valor);
            echo '<br>';

            $valor2 = (float) $valor;
            echo gettype($valor2); 
            echo '<br>';
            
            //funções php
            function adele(){
                echo "Send my love to your new lo-o-ver<br>";
            }
            adele();

            function calcularArea($largura, $comprimento){
                $area = $largura * $comprimento;
                return $area;
                
            }
            echo calcularArea(20, 10) .'<br>';

            //manipulação strings
            $texto = "Curso";
            echo strtolower($texto). '<br>';
            echo strtoupper($texto). '<br>';
            echo ucfirst($texto). '<br>';

            //arrays
            $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
            //$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
            $lista_frutas[] = 'Abacaxi';

            echo '<pre>';
            var_dump($lista_frutas);
            echo '</pre>';
            echo '<br>';
            echo '<pre>';
            print_r($lista_frutas);
            echo '</pre>';

            echo in_array('Maçã', $lista_frutas);

        ?>

        <h1>Ficha Cadastral</h1>
        <br>
        <p>Nome: <?= $nome?></p>
        <p>Idade: <?= $idade?></p>
        <p>Peso: <?= $peso?></p>
        <p>Fumante: <?= $fuma ?></p>

    </body>

</html>