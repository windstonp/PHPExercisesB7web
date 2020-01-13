<?php
        $n1 = rand(0,10);
        $n2 = rand(0,10);
?>
<form method="POST" action="verificador.php">
    <?php
        echo $n1."+".$n2;
    ?>
    <input type="number" style="display: none;" name="n1" value="<?php echo $n1 ?>">
    <input type="number" style="display: none;" name="n2" value="<?php echo $n2 ?>">
    <input type="number" name="resultado">
    <input type="submit" name="conta">
</form>