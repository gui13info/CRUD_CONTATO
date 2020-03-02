<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="aplick.css" media="screen" />
    <link rel="stylesheet" type="text/css"  href="menu.css" media="screen" />
    <meta charset="UTF-8">
    <title>Projeto PHP</title>
</head>
<body>
    
    <?php
        include "operar.php";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            inserirContato($_POST['nome'], $_POST['email'], $_POST['ddd'], $_POST['numero'] );
        }
    ?>
    <ul id="nav"> 
        <li><a href="aplicando.php">Home</a></li>  
        <li><a href="#">Contatos</a> 
        <ul> 
            <li><a href="teste.php">Configurar</a></li> 
        </ul> 
        </li>
    </ul>
    <h1 class='center'>Cadastrar Pessoa</h1>
    <table align="center">
        <tr>
            <td>
                <div>
                <form id="forContato" action="aplicando.php" method="POST" onsubmit="return validarForm()">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu nome...">

                    <label for="ddd">DDD</label>
                    <input type="text" id="ddd" name="ddd" placeholder="000">

                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero" placeholder="000000000">

                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="exemplo@email.com">

                    <input type="submit" value="Enviar">
                </form>
                </div>
        </td>
        </tr>
    <table>
    <script>
        let form = document.querySelector("#formContato");

        function validarForm(){
            if(form.nome.value == false){
                alert ("Digite o nome do Contato!");
                return false;
            }

            if(form.email.value == false){
                alert ("Digite o email do Contato!");
                return false;
            }

            if(form.ddd.value == false){
                alert ("Digite o nome do Contato!");
                return false;
            }

            if(form.numero.value == false){
                alert ("Digite o nome do Contato!");
                return false;
            }

            return true;
        }
    
    </script>
<br/><br/><br/><br/>
 <copy>Guilherme M.</copy>   
</body>
</html>