<?php
    try {
        echo '<h3> *** Try *** </h3>';

        //$sql = 'Select * from clientes';
        //mysql_query($sql); //irá retornar um erro, pois ainda não tem um BD

        if(!file_exists('require_arquivo_a.php')) {
            throw new Exception('O arquivo não está disponível');
        }

    } catch(Error $e) {
        echo '<h3> *** Catch *** </h3>';
        echo '<p style="color:red">' . $e . '</p>';

    } catch (Exception $e){
        echo '<h3> *** Catch Exceção *** </h3>';
    } finally { //não é necessário utilizar o finally quando o catch é usado
        echo '<h3> *** Finally *** </h3>';
    }

?>