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
<?php
if (isset($_POST['numero']) && $_POST['numero'] != 0) {
  $imposto = intval($_POST['imposto']) / 100;
  $impostocobrado = intval($_POST['numero']) * $imposto;
  $conta = $_POST['numero'] - $impostocobrado;
  echo "o valor inicial é: " . $_POST['numero'];
  echo "<br>";
  echo "o imposto é de: " . $_POST['imposto'] . "%";
  echo "<hr>";
  echo "o imposto é: " . $impostocobrado;
  echo "<br>";
  echo "o valor do produto é: " . $conta;
}
?>