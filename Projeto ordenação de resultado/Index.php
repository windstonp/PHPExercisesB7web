<?php
    try{
        $dns = "mysql:dbname=projeto_ordenar;host:localhost";
        $dbuser = "root";
        $dbpass = "";
        $pdo =  new PDO($dns,$dbuser,$dbpass);
    }catch(PDOException $e){
        echo "erro: ".$e->getMessage();
        exit;
    }
    if(isset($_GET['ordem']) && !empty($_GET['ordem'])){
        $ordem = addslashes($_GET['ordem']);
        $sql = "SELECT * FROM usuario ORDER BY ".$ordem;
    }else{
        $ordem = "";
        $sql = "SELECT * FROM usuario";
    }
?>
<form method="GET">
    ordernar por: <br><br>
    <select name="ordem" id="" onchange="this.form.submit()">
        <option></option>
        <option value="nome" <?php echo ($ordem == "nome")?'selected="selected"':"''"; ?>>Nome</option>
        <option value="idade" <?php echo ($ordem == "idade")?'selected="selected"':"''"; ?>>idade</option>
    </select>
</form>
<table border="1" width="400px">
    <tr>
        <td>nome:</td>
        <td>idade</td>
    </tr>
    <?php
        $sql = $pdo->query($sql);
        if ($sql->rowCount()>0){
            foreach($sql->fetchAll() as $usuarios){
                ?>
                    <tr>
                        <td><?php echo $usuarios["nome"];?></td>
                        <td><?php echo $usuarios["idade"];?></td>
                    </tr>
                <?php
            }
        }
    ?>
</table>