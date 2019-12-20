<?php
    require "conexao.php";
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        $id =addslashes($_GET["id"]);
        $sql = "DELETE FROM usuario WHERE id = '$id'";
        $pdo->query($sql);
        header("location: index.php");
    }else{
        header("location: index.php");
    }
?>