<?php
  $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
  if($nome){
    $texto = file_get_contents('nomes.txt');
    $texto .= "\n".$nome;
    $texto = file_put_contents('nomes.txt',$texto);
  }
?>
<fieldset>
<legend>Insira o nome para adicionar</legend>
<form method="POST">
  Nome: <br>
  <input type="text" name="nome">
  <br>
  <br>
  <input type="submit" value="submit">
</form>
</fieldset>
  <ul>
    <?php
      $lista = file_get_contents('nomes.txt');
      $lista = explode("\n",$lista);
      foreach($lista as $i){
        echo '<li>'.$i.'</li>';
      }
    ?>
  </ul>