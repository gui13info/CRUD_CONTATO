<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="aplicaCss.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="forms.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="menu.css" media="screen" />
    <title>Busca do ID</title>
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

        <br/><br/><br/>
<table id="customers">
    <tr>
        <th>Resultado da Busca</th>
    </tr>
        <tr>
            <td>
                <?php 
                    include 'operar.php';


                    $cont = $_POST['id1'];
                    $contato = buscarPorId($cont);
                    if($_POST['id1'] == $cont){
                    echo "ID do Contato: {$contato['id']} <br/>";
                };
                ?>
            </td>
            </tr>
            <tr>
            <td>
                <?php 
                    echo "Nome do Contato: {$contato['nome']} <br/>";
                ?>
            </td>
        </tr>
    </table>
    <copy>Guilherme M.</copy>
</body>
</html>