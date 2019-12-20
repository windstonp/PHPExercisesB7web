<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        if(isset($_FILES['arquivo'])){
            if(count($_FILES['arquivo']['tmp_name']) > 0){
                for($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++){
                    $extensao = explode("/",$_FILES["arquivo"]["type"][$q]);
                    $nome = md5($_FILES["arquivo"]["name"][$q].time().rand(0,99));
                    move_uploaded_file($_FILES['arquivo']['tmp_name'][$q],"arquivos/".$nome.".".$extensao[1]);
                    
                }
                echo "envio bem sucedido";
            }
        }
    ?>
    </pre>
    <form method="POST" enctype="multipart/form-data">
        arquivo:<br>
        <input type="file" name="arquivo[]" multiple><br><br>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>