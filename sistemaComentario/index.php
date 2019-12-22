<?php
    $dsn = "mysql:dbname=projeto_comentario;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    try{
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "erro: ".$e->getMessage();
        exit;
    }

    if (isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $msg = addslashes($_POST['mensagem']);
        $sqlInsert = "INSERT INTO mensagem (nome,data_msg,msg) VALUES (:nome,NOW(),:msg)";
        $prepare = $pdo->prepare($sqlInsert);
        $prepare->bindValue(":nome",$nome);

        $prepare->bindValue(":msg",$msg);
        $prepare->execute();
    }
?>
<fieldset>
    <form action="" method="POST">
    nome: <br><br>
    <input type="text" name="nome"><br><br>
    mensagem: <br><br>
    <textarea name="mensagem"></textarea><br><br>
    <input type="submit" value="ENVIAR">
    </form>
</fieldset>
<br><br>

<?php
    $sql = "SELECT * From mensagem ORDER BY data_msg DESC";
    $sql = $pdo->query($sql);
    if($sql -> rowCount() > 0){
        foreach($sql->fetchAll() as $comentario):
        ?>
            <strong><?php echo $comentario["nome"] ?></strong> <br><br>
                <?php echo $comentario["msg"] ?>
            <hr>
        <?php
        endforeach;
    }else{
        echo "sem mensagem";
    }
?>