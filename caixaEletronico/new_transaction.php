<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caixa Eletronico</title>
</head>
<body>
    <form action="processing_transation.php" method="POST">
        tipo de Transação:<br>
        <Select name="tipo">
            <option value="0">Deposito</option>
            <option value="1">Retirada</option>
        </Select>
        <br>
        <br>
        valor:<br>
        <input type="text" name="valor" pattern="[0-9.,]{1,}">
        <br>
        <br>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>