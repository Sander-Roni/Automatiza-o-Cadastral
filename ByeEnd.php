<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once "ConnectEnd.php";
    $id = $_POST['id'];
    $SQL =("DELETE FROM Utilizar WHERE id = $id") or die(mysqli_error($Conexão));
if($Conexão -> query($SQL)){
    echo "Excluido com Sucesso!";
}
?><br>
<a href="../Front.html"><button type="button" class="bg-dark text-white mb-3">Back</button></a><br>
</body>
</html>