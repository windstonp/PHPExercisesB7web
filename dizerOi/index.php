<form method="POST">
    insira seu nome: <br>
    <input type="text" name="nome">
    <br>
    <input type="submit" value="Enviar">
</form>
<?php
    if (isset($_POST['nome']) && !empty($_POST['nome'])){
        echo "olá ".$_POST['nome'];
    }
?>