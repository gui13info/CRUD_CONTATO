<?php 
    function getConnection(){

        $conexao = mysqli_connect("localhost", "root", "", "contatosbd", "3306");
    
        /*if($conexao){
            echo "Conectado <br/>";
        }else{
            echo "Erro Conexão <br/>";
        }*/
        return $conexao;
    }
    //FECHANDO CONEXÃO
    function closeConnection($conexao){
        mysqli_close($conexao);
    }
?>