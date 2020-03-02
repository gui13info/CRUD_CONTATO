<?php 
    include 'operar.php';
    $novo_id = $_POST['id'];
    $novo_nome = $_POST['nome'];
    $novo_ddd = $_POST['ddd'];
    $novo_num = $_POST['numero'];
    $novo_email = $_POST['email'];

    atualizar($novo_id, $novo_nome, $novo_email, $novo_ddd, $novo_num);
    header("location: teste.php");


?>