<?php 
        include 'operar.php';
            $del = $_POST['id'];
            deletar($del);
            header("location: teste.php");
        ?>