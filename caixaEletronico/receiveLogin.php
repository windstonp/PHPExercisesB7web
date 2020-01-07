<?php
    session_start();
    require "config.php";
    if (isset($_POST['agencia']) && !empty($_POST['agencia'])){
        $agencia = addslashes($_POST['agencia']);
        $conta = addslashes($_POST['conta']);
        $senha = md5(addslashes($_POST['senha']));
        $sql = "SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha";
        $prepare = $pdo->prepare($sql);
        $prepare->bindValue(":agencia",$agencia);
        $prepare->bindValue(":conta",$conta);
        $prepare->bindValue(":senha",$senha);
        $prepare->execute();
        if($prepare->rowCount() > 0){
            $sql = $prepare->fetch();
            $_SESSION['banco'] =  $sql['id'];
            header("location: index.php");
            exit;
        }
    }
?>