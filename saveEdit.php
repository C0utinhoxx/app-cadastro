<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conect.php');
    if(isset($_POST['update']))
    {
        $idproduto = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preço'];
        $descricao = $_POST['descrição'];
        
        $sqlInsert = "UPDATE produtos 
        SET nome='$nome',preco='$preco',descricao='$descricao'
        WHERE idproduto=$idproduto";

        $result = $conn->query($sqlUpdate);
        // print_r($result);
    }
    header('Location: cadastro.php');

?>