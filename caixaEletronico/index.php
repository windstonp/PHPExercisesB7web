<?php
    session_start();
    require "config.php";
    if (isset($_SESSION['banco']) && !empty($_SESSION['banco'])){
        $id = $_SESSION['banco'];
        $sql = "SELECT * FROM contas WHERE ID = :id";
        $prepare = $pdo->prepare($sql);
        $prepare->bindValue(":id",$id);
        $prepare->execute();
        if($prepare->rowCount()>0){
            $info = $prepare->fetch();
        }else{
            header("location: login.php");
            exit;
        }
    }else{
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caixa Eletronico</title>
</head>
<body>
    <h1>Banco Teste</h1>
    Titular: <?php echo $info['titular'] ?><br>
    Agencia: <?php echo $info['agencia'] ?><br>
    Conta: <?php echo $info['conta'] ?> <br>
    Saldo: <?php echo $info['saldo'] ?> <br>
    <a href="sair.php">SAIR</a>
</body>
</html>