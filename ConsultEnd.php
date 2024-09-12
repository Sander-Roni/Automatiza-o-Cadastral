<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando Consulta...</title>
</head>
    <table class="table table-hover";
    <thead>
        <tr>
            <th class="h6 text-white" scope="col">Id</th>
            <th class="h6 text-white" scope="col">Nome de Usuario</th>
            <th class="h6 text-white" scope="col">Sobrenome de Usuario</th>
            <th class="h6 text-white" scope="col">Data de Nascimento</th>
            <th class="h6 text-white" scope="col">Palavra Passe</th>
            <th class="h6 text-white" scope="col">Email</th>
            <th class="h6 text-white" scope="col">Estado</th>
            <th class="h6 text-white" scope="col">Cidade</th>
        </tr>
    </thead>
        <tbody>
            <?php
                require_once('ConnectEnd.php');
                $SQL=mysqli_query($Conexão,'SELECT * FROM Utilizar') or die
                (mysqli_error($Conexão));
                while($row = mysqli_fetch_assoc($SQL)){
                    echo "<tr>
                    <td class='bg-white'>".$row['id']."</td>
                    <td class='bg-white'>".$row['Nome']."</td>
                    <td class='bg-white'>".$row['Sobrenome']."</td>
                    <td class='bg-white'>".$row['Ano_De_Nascimento']."</td>
                    <td class='bg-white'>".$row['Senha']."</td>
                    <td class='bg-white'>".$row['Email']."</td>
                    <td class='bg-white'>".$row['Estado']."</td>
                    <td class='bg-white'>".$row['Cidade']."</td>";
                }
            ?>
        </tbody>
            </table>
</html>
