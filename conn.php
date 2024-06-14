<?php

include_once('listagem.php');

$consulta = "SELECT * FROM produtos";
$conn = $mysqli->query($consulta) or die($mysqli->error);
?>



<html>
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
        <table>
            <tr>
                <td>Nome do produto</td>
                <td>Preço do produto</td>
                <td>Descrição do produto</td>
            </tr>
            <?php while($dado = $conn->mysqli_fetch_array() ){ ?>
            <tr>
                <td><?php echo $dado["idproduto"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["preco"]; ?></td>
                <td><?php echo $dado["descricao"]; ?></td>
               
            </tr>
            <?php } ?>
        </table>
</body>
</html>
