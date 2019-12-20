<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_POST["email"]) && !empty($_POST["email"])){
        $email = addslashes($_POST["email"]);
        $senha = md5(addslashes($_POST["senha"]));
        $dsn = "mysql:dbname=blog;host=localhost";
        $dbuser= "root";
        $dbpass = "";
        try{
            $pdo = new PDO($dsn,$dbuser,$dbpass);
            $sql = "SELECT * FROM usuario WHERE email = :email and senha = :senha";
            $prepare = $pdo->prepare($sql);
            $prepare->bindValue(":email",$email);
            $prepare->bindValue(":senha",$senha);
            $prepare->execute();
            if($prepare->rowCount()>0){
                $dado = $prepare->fetch();
                $_SESSION["id"] = $dado["id"];
                header("location: index.php");
            }
        }catch(PDOException $e){
            echo "erro: ".$e -> getMessage();
        }
        
    }
    ?>
    <form action="" method="POST">
        email:  
        <br>
        <input type="text" name="email">
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