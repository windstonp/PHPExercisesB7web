<?php
    session_start();
    require "config.php";
    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        $valor = str_replace(",",".",$_POST['valor']);
        $valor = floatval($valor);
        $sql = "INSERT INTO historico (id_conta,tipo,valor,data_operacao) VALUES (:id_conta,:tipo,:valor,NOW())";
        $prepare = $pdo->prepare($sql);
        $prepare->bindValue(":id_conta",$_SESSION['banco']);
        $prepare->bindValue(":tipo",$tipo);
        $prepare->bindValue(":valor",$valor);
        $prepare->execute();
        if($tipo == 0){
            $sql = "UPDATE contas SET saldo = saldo + :valor WHERE id = :id";
            $prepare = $pdo->prepare($sql);
            $prepare -> bindValue(":valor",$valor);
            $prepare -> bindValue(":id",$_SESSION['banco']);
            $prepare->execute();
        }else{
            $sql = "UPDATE contas SET saldo = saldo - :valor WHERE id = :id";
            $prepare = $pdo->prepare($sql);
            $prepare -> bindValue(":valor",$valor);
            $prepare -> bindValue(":id",$_SESSION['banco']);
            $prepare->execute();
        }
        header("location: index.php");
        exit;
    }else{
        header("location: new_transaction.php");
        exit;
    }
?>