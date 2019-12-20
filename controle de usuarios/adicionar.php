<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require "conexao.php";
        if(isset($_POST["nome"]) && !empty($_POST["nome"])){
            $nome = addslashes($_POST["nome"]);
            $email = addslashes($_POST["email"]);
            $senha = md5(addslashes($_POST["senha"]));
            $sql = "INSERT INTO usuario (nome , email , senha) VALUES ('$nome','$email','$senha')";
            $pdo->query($sql);
            header("location: index.php");
        }
        
    ?>
    <form action="" method="POST">
        nome: 
        <br>
        <input type="text" name="nome">
        <br>
        email: 
        <br>
        <input type="email" name="email">
        <br>
        senha:
        <br>
        <input type="password" name="senha">
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>