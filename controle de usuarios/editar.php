<?php
    require "conexao.php";
    $id = 0;
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        $id = addslashes($_GET["id"]);
    }
    if(isset($_POST["nome"]) && !empty($_POST["nome"])){
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $sql = "UPDATE usuario SET nome = '$nome',email ='$email' WHERE id = '$id'";
        $pdo->query($sql);
        header("location: index.php");
    }
        $sql = "SELECT * FROM usuario where id = '$id'";
        $sql = $pdo->query($sql);
        if($sql->rowCount()>0){
            $dado = $sql->fetch();
        }else{
            header("location: index.php");
        }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    nome: 
        <br>
        <input type="text" name="nome" value="<?php echo $dado["nome"]; ?>">
        <br>
        email: 
        <br>
        <input type="email" name="email" value="
            <?php echo $dado["email"]; ?>
        ">
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>