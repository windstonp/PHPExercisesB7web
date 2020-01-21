<form method="POST">
  Informe os numeros separados pro ,: <br>
  <input type="text" name="numero"> <br> <br>
  <input type="submit" value="Enviar">
</form>
<?php
if (isset($_POST['numero']) && !empty($_POST['numero'])) {
  $conta = 0;
  $numero = explode(',', $_POST['numero']);
  foreach ($numero as $numero) {
    if ($numero > $conta) {
      $conta = $numero;
    };
  }
  echo $conta;
}
?>