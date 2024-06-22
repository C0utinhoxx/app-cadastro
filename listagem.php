  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> listagem </title>
  </head>
      <style>
        body{
          font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(#F2F2F7), rgb(1#F2F2F7));
        }
    .table-bg{
      <legend><b>Cadastro do produto</b></legend>
      background-color: rgba(0, 0, 0, 0.3);
      position: absolute;
      top: 50%;
      left: 50%;  
      transform: translate(-50%,-50%);
      padding: 15px;
      border-radius: 15px;
      width: 20%;
      text-align: center;
       background-color: rgba(211,211,211);
       padding: 15px;
       border-radius: 15px;
       font-size: 20px;
      letter-spacing: 3px;
    }
  </style>
  </html>
  <?php

  include_once('conect.php');

  $result= mysqli_query ($conn, " SELECT * FROM produtos");
?>

<div class='m-5'>

<table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Descrição</th>
      <th scope="col"...</th>
    </tr>
  </thead>
  <tbody>
  <?php
   while($user_data = mysqli_fetch_assoc($result))
  {        
      echo "<tr>";
     echo "<td>" .$user_data['idproduto']."</td>";
     echo "<td>" .$user_data['nome']."</td>";
      echo "<td>" .$user_data['preco']."</td>";
     echo "<td>" .$user_data['descricao']."</td>";
     echo "<td>
        <a class='btn btn-sm btn-primary' href='cadastro.php?id=$user_data[idproduto]'>
       <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
       <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
       </svg>
       </a>
        </td>";
        echo "<td>
        <a class='btn btn-sm btn-danger' href='cadastro.php?id=$user_data[idproduto]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
  <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5'/>
</svg>
</svg>
 </td>"; 
 "</tr>";
 }
?>
  </tbody>
</table>
