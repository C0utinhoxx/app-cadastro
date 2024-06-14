<?php
if(!empty($_GET ['idproduto']))
{
    // print_r('Nome do produto: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Preço do produto: ' . $_POST['preco']);
    // print_r('<br>');
    // print_r('Descrição do produto: ' . $_POST['descricao']);

    include_once('conect.php');

    $id = $_GET['idproduto'];

    $sqlSelect = "SELECT * FROM produtos WHERE idproduto=$idproduto";

    $result = $conn->query($sqlSelect);

    print_r($result);

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    // $result = mysqli_query ($conn, "INSERT INTO produtos(nome,preco,descricao) VALUES ('$nome','$preco','$descricao')");    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(#F2F2F7), rgb(1#F2F2F7));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;  
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: dodgerblue;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-color: rgb(0, 128, 255);
        }
    </style>
</head>
<body>
        <a href="listagem.php">Voltar</a>
    <div class="box">
            <fieldset>
                <legend><b>Cadastro do produto</b></legend>
                <form action="cadastro.php" method="POST">
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome do produto</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="preco" id="preco" class="inputUser" required>
                    <label for="preco" class="labelInput">Preço do produto </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelInput">Descrição do produto</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
