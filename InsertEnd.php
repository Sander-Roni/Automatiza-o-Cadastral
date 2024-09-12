<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando Inserção de Dados...</title>
</head>
<body>   
<?php
    require_once 'ConnectEnd.php';
    if($_POST){
        $Nome=$_POST['Nome_Usuario'];
        $Sobrenome=$_POST['Sobrenome_Usuario'];
        $Data_De_Nascimento=$_POST['Data_Nascimento'];
        $Palavra_Chave=$_POST['Palavra_Passe'];
        $Idade=$_POST['Email_Usuario'];
        $Estado=$_POST['Estado_Usuario'];
        $Cidade=$_POST['Cidade_Usuario'];
        $SQL="INSERT INTO Utilizar (Nome,Sobrenome,Ano_De_Nascimento,Senha,Email,Estado,Cidade) Values ('$Nome','$Sobrenome','$Data_De_Nascimento','$Palavra_Chave','$Idade','$Estado','$Cidade')";
        if($Conexão -> query($SQL)){
            echo "Conectado Com Sucesso!";
        }else{
            echo "Erro".$SQL."".$Conexão -> connect_error;
            $Conexão -> close();
        }
    }
?><br>
<a href="../Front.html"><button type="button" class="bg-dark text-white mb-3">Back</button></a
</body>
</html>
