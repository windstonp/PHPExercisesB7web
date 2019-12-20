<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        require 'conexao.php';
    ?>
    <a href="adicionar.php">Adicionar Usuario</a>
    <table style="
        border: 0;
        width: 100%; 
        text-align:center;
    ">
        <thead>
            <tr>
                <td>nome</td>
                <td>email</td>
                <td>ações</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM usuario";
                $sql = $pdo->query($sql);
                if($sql->rowCount()>0){
                    foreach($sql->fetchAll() as $usuario){
                        echo "<tr>";
                            echo "<td>".$usuario["nome"]."</td>";
                            echo "<td>".$usuario["email"]."</td>";
                            echo "<td><a href='editar.php?id=".$usuario["id"]."'>EDITAR</a>//<a href='deletar.php?id=".$usuario["id"]."'>DELETAR</a></td>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>
