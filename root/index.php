<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    <style type="text/css">
        body {
            background-color:#F484FF;
            padding: 5px auto;
        }
        .botao {
            border-radius: 10px;
            border-color: #F484FF;
            width: 50px;
            
            background: pink;
        }
        </style>
</head>
<body>
   
    <form action="" method="post">
   
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <input type="text" name="cidade">
    <input type="text" name="idade">
    <input class="botao" type= "submit" value ="enviar">
    
</form>

</body>
</html>

<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cidade = $_POST['cidade'];
$idade = $_POST['idade'];

echo "$nome </br>";
echo "$sobrenome </br>";
echo "$cidade </br>";
echo "$idade</br>";





?>