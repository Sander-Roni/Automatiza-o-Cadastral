<?php
    require_once "ConnectEnd.php";
    if($_POST){
        $Nome=$_POST['Nome_Usuario'];
        $Sobrenome=$_POST['Sobrenome_Usuario'];
        $AnoDeAniversario=$_POST['Data_Nascimento'];
        $Palavra_Chave=$_POST['Palavra_Passe'];
        $Email=$_POST['Email_Usuario'];
        $Estado=$_POST['Estado_Usuario'];
        $Cidade=$_POST['Cidade_Usuario'];
        $id=$_POST['id'];
        $SQL="UPDATE Utilizar SET Nome = '$Nome', Sobrenome = '$Sobrenome', Ano_De_Nascimento = '$AnoDeAniversario',
        Senha = '$Palavra_Chave', Email = '$Email', Estado = '$Estado', Cidade = '$Cidade' WHERE id = {$id}";
        if($Conexão->query($SQL)){
            echo "<h6>Atualizado com Sucesso!</h1>";
            echo "<a href='../Front.html'><button type='button' class='btn btn-success'>Cadastro</button></a>";
        }else{
            echo "Erro:".$Conexão->error;
        }
        $Conexão->close();
    }
?>