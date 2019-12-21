<?php
        if(!empty($_POST["codigo"])){
        $codigo = $_POST["codigo"];
        if($_POST["codigo"] == "bonieky"){
            header("location: pagina2.php");
        }else{
            echo "codigo incorreto";
        }
    }
?>
    <h1>pagina 1</h1>
    <form action="" method="POST">
    Digite Bonieky para avançar.<br><br>
    <input type="text" name="codigo"><br><br>
    <input type="submit" value="ENVIAR">
    </form>
