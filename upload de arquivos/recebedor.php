<?php
    $arquivo = $_FILES["arquivo"];
    if(isset($arquivo["tmp_name"]) && !empty($arquivo["tmp_name"])){
        $extensao = explode("/",$arquivo["type"]);
        $nome = md5(time().rand(0,99)).'.'.$extensao[1];
        move_uploaded_file($arquivo["tmp_name"],'arquivos/'.$nome);
        echo "arquivo enviado com sucesso";
    }
?>