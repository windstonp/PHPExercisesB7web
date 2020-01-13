<?php
    $conta = intval($_POST['n1']) + intval($_POST['n2']);
    if($conta == $_POST['resultado']){
        echo "Humano";
    }else{
        echo "você não é humano";
    }
?>