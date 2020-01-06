<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        require "config.php";
        if(empty($_SESSION['logou'])){
            header("location: login.php");
        }
        $email = '';
        $codigo = '';
        $sql = "SELECT email,codigo FROM usuario where id = ".addslashes($_SESSION['logou']);
        $sql = $pdo->query($sql);
        if ($sql->rowCount()>0){
            $info = $sql->fetch();
            $email = $info['email'];
            $codigo = $info['codigo'];
        }
    ?>
    <h1>Area Restrita</h1>
    <p>usuario: <?php echo $email;  ?></p> - <a href="sair.php">SAIR</a>
    <p>link: http://localhost/PHPExercisesB7web/RegistroConvite/Cadastrar.php?codigo=<?php echo $codigo; ?></p>
</body>
</html>