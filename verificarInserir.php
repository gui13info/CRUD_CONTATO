<?php 
    include 'operar.php';
    
    $nome = $_POST['nome'];
    $ddd = $_POST['ddd'];
    $num = $_POST['numero'];
    $email = $_POST['email'];

    inserirContato($nome, $email, $ddd, $num);
    header("location: teste.php");


?>