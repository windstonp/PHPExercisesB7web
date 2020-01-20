<?php
if (isset($_POST['numero']) && $_POST['numero'] != 0) {
  $imposto = intval($_POST['imposto']) / 100;
  $impostocobrado = intval($_POST['numero']) * $imposto;
  $conta = $_POST['numero'] + $impostocobrado;
  echo "o total cobrado é: " . $conta;
}
?>
<h1>Calculadora de impostos</h1>
<form method="POST">
  valor: <br>
  <input type="number" name="numero"> <br>
  taxa de imposto (em %): <br>
  <input type="number" name="imposto">
  <br>
  <br>
  <input type="submit" value="enviar">
</form>