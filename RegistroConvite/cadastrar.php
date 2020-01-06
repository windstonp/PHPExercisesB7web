<?php
    session_start();
    require 'config.php';
    if(!empty($_GET['codigo'])){
        $codigo = addslashes($_GET['codigo']);
        $sql = "SELECT * FROM usuario WHERE codigo = '$codigo'";
        $sql = $pdo->query($sql);
        if($sql->rowCount() == 0){
            header("location: login.php");
            exit;
        }
    }else{
        header("location: login.php");
        exit;
    }
    if(!empty($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));
        $sql = "SELECT * FROM usuario where email = '$email'";
        $sql = $pdo->query($sql);
        if($sql->rowCount()<=0){
            $codigo = md5(rand(0,99999999)).md5(rand(0,9999999));
            $sql = "INSERT INTO usuario (email,senha,codigo) VALUES ('$email','$senha','$codigo')";
            $sql = $pdo->query($sql);
            unset($_SESSION['logou']);
            header('location: index.php');
            exit;
        }
    }
?>
    <fieldset>
        <legend>CADASTRAR</legend>
            <form method="POST">
            Email:<br><br>
            <input type="text" name="email"><br><br>
            senha: <br><br>
            <input type="password" name="senha"> <br><br>
            <input type="submit" value="cadastrar"><br><br>
            <a href="cadastrar.php">Cadastrar usuario</a>
        </form>
    </fieldset>