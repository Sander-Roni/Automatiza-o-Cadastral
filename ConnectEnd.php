<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando Conexão...</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="FBack_i.css">
</head>
<body>  
<?php
    $Localhost="localhost";
    $root="root";
    $Senha="";
    $Banco="BancoTeste";
    $Conexão= new mysqli($Localhost,$root,$Senha,$Banco);
    if($Conexão -> connect_error){
        die("Erro de Conexão".$Conexão -> connect_error);
    }else{
        echo "";
    }
?>
<center><i class="text-white" >Bem Vindo
</body>
</html>
