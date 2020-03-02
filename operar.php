<?php

    include 'conecta.php';

    function inserirContato($nome, $email, $ddd, $numero){

        //Abrir conexão
        $conn = getConnection();

        //Criar a string(query) sql
        $querySql = "INSERT INTO contatos (nome,email,ddd,numero) VALUES ('$nome','$email','$ddd','$numero')";
        
        //Executar a string(query) sql
        if(mysqli_query($conn, $querySql)){
            echo "Contato inserido com sucesso!<br/>";
        }else{
            echo "Error ao excluir contato!<br/>";
        }
        
        //Fechar a Conexão
        closeConnection($conn);
    }

    function listarTodos(){
        $contatos = array();

        $conexao = getConnection();
        $querySql = "SELECT * FROM contatos";

        $result = mysqli_query($conexao, $querySql);

        while($contato = mysqli_fetch_array($result)){
           $contatos[] = $contato;
        }

        closeConnection($conexao);

        return $contatos;
    }
    
    function atualizar($id, $nome, $email, $ddd, $numero){

        $conexao = getConnection();

        $querySql = "UPDATE contatos SET nome = '$nome', email = '$email', ddd = '$ddd', numero = '$numero' WHERE id = '$id'";

        if(mysqli_query($conexao, $querySql)){
            echo "Contato alterado!";
        }else{
            echo "Error ao alterar contato!";
        }

        closeConnection($conexao);
    }

    function deletar($id){

        $conexao = getConnection();

        $query = "DELETE FROM contatos WHERE id = '$id'";

        if(mysqli_query($conexao, $query) == true){
            echo "Contato deletado!";
        }else{
            echo "Error ao deletar contato";
        }

        closeConnection($conexao);
    }

    function buscarPorId($id){

        $conexao = getConnection();

        $query = "SELECT * FROM contatos WHERE id = '$id'";

        $result = mysqli_query($conexao, $query);

        $contato = mysqli_fetch_array($result);

        closeConnection($conexao);

        return $contato;
    }

?>