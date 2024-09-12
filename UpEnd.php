<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    require_once "ConnectEnd.php";
$id=$_POST['id'];
$SQL=("SELECT * FROM Utilizar WHERE id='$id'") or die(mysqli_error($Conexão));
$Result=$Conexão->query($SQL);
if ($Result -> num_rows>0){
    $Dados_Banco=$Result->fetch_assoc();
    $Nome=$Dados_Banco['Nome'];
    $Sobrenome=$Dados_Banco['Sobrenome'];
    $AnoDeNascimento=$Dados_Banco['Ano_De_Nascimento'];
    $Palavra_Passe=$Dados_Banco['Senha'];
    $Email=$Dados_Banco['Email'];
    $Estado=$Dados_Banco['Estado'];
    $Cidade=$Dados_Banco['Cidade'];
    $id=$Dados_Banco['id'];
}
?>
<body>
    <form action="http://localhost/Desafio1/BackDatas/ByeEnd.php" method="POST">
        <table class="table table-hover">
            <tr>
            <th>Nome_Usuario</th>
            <td><input type="text" name="Nome_Usuario" placeholder="Nome Usuario" value="<?php echo $Nome;?>"></td></tr>
            <tr>
            <th>Sobrenome_Usuario</th>
            <td><input type="text" name="Sobrenome_Usuario" placeholder="Sobrenome do Usuario" value="<?php echo $Sobrenome;?>"></td></tr>
            <tr>
            <th>Data de Nascimento</th>
            <td><input type="text" name="Data_Nascimento" placeholder="Ano de Nascimento" value="<?php echo $AnoDeNascimento;?>"></td></tr>
            <tr>
            <th>Palavra Passe</th>
            <td><input type="text" name="Palavra_Passe" placeholder="Senha" value="<?php echo $Palavra_Passe;?>"></td></tr>
            <tr>
            <th>Email do Usuario</th>
            <td><input type="text" name="Email_Usuario" placeholder="Email do Usuario" value="<?php echo $Email;?>"></td></tr>
            <tr>
            <th>Estado do Usuario</th>
            <td><input type="text" name="Estado_Usuario" placeholder="Estado do Usuario" value="<?php echo $Estado;?>"></td></tr>
            <tr>
            <th>Cidade do Usuario</th>
            <td><input type="text" name="Cidade_Usuario" placeholder="Cidade do Usuario" value="<?php echo $Cidade;?>"></td></tr>
            <input type="hidden" name="id" value="<?php echo $Dados_Banco['id']?>"/>
            <br>
            </td></table><button type="submit" class="btn btn-info">Salvar Alteração</button>
</form>
</body>
</html>