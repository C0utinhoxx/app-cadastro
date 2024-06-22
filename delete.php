<?php

    if(!empty($_GET['idproduto']))
    {
        include_once('conect.php');

        $idproduto = $_GET['idproduto'];

        $sqlSelect = "SELECT *  FROM produto WHERE idproduto=$idproduto";

        $result = $conn->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM produto WHERE idproduto=$idproduto";
            $resultDelete = $conn->query($sqlDelete);
        }
    }
    header('Location: cadastro.php');
   
?>