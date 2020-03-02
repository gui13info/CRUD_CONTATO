<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="aplicaCss.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="forms.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="menu.css" media="screen" />
    <meta charset="UTF-8">
    <title>Projeto</title>
</head>
<body>
    <ul id="nav"> 
        <li><a href="aplicando.php">Home</a></li>  
        <li><a href="#">Contatos</a> 
        <ul> 
            <li><a href="teste.php">Configurar</a></li> 
        </ul> 
        </li>
    </ul>

    <h1 align="center">Cadastrar Pessoa</h1>
    <table border="1" align="center">
    <tr id="customers">
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Número</th>
    </tr>
            <?php 
        include 'operar.php';

        $contatos = listarTodos();
        for($i = 0; $i < count($contatos); $i++){
            
            echo "<tr><td>{$contatos[$i]['id']}</td>". 
            "<td>{$contatos[$i]['nome']}</td>".
            "<td>{$contatos[$i]['email']} </td>". 
            "<td>{$contatos[$i]['ddd']} {$contatos[$i]['numero']}</td></tr>";
        }
            ?>
    </table>
<br/><br/>

    <table align="center">
        <tr> 
            <td>
                <h1>Atualizar Contato</h1>
                <div>
                <form id="forContato" action="verificaAtualizar.php" method="POST">
                <form>
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id" placeholder="Inserir ID...">

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
            <td>
                <h1>Inserir Novo Contato</h1>
                <div>
                <form id="forContato" action="verificarInserir.php" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu nome...">

                    <label for="ddd">DDD:</label>
                    <input type="text" id="ddd" name="ddd" placeholder="000">

                    <label for="numero">Número:</label>
                    <input type="text" id="numero" name="numero" placeholder="000000000">

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="exemplo@email.com">

                    <input type="submit" value="Enviar">
                </form>
                </div>
            </td>
        </tr>
    </table>

    <br/><br/>
    <table align="center">
        <tr>
            <td>
                <h2>Buscar Contato(ID)</h2>
            <div>
                <form id="forContato" action="verificaId.php" method="POST">
                    <label for="id1">Buscar ID:</label>
                    <input type="text" id="id1" name="id1" placeholder="Insira ID...">
                    <input type="submit" value="Enviar">
                </form>
                </div>
            </td>
            <td>
            <h2>Deletar Contato</h2>
            <div>
                <form id="forContato" action="verificaDeletar.php" method="POST">
                    <label for="id">Deletar:</label>
                    <input type="text" id="id" name="id" placeholder="Insira ID...">
                    <input type="submit" value="Enviar">
                </form>
                </div>
            </td>
        </tr>
    </table>   
<copy>Guilherme M.</copy>
</body>
</html>