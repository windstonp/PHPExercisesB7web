<?php
    if(isset($_POST['n1']) && !empty($_POST['n1'])){
        switch($_POST['operation']){
            case 0:
                $conta = $_POST['n1'] + $_POST['n2'];
                break;
            case 1:
                $conta = $_POST['n1'] - $_POST['n2'];
                break;
            case 2:
                $conta = $_POST['n1'] * $_POST['n2'];
                break;
            case 3:
                $conta = $_POST['n1'] / $_POST['n2'];
                break;
            case 4:
                $conta = pow($_POST['n1'],$_POST['n2']);
                break;
            default:
                $conta = $_POST['n1'] + $_POST['n2'];
                break;
        }
    }
?>
<form method="POST">
<input type="number" name="n1">
<select name="operation">
    <option value="0">+</option>
    <option value="1">-</option>
    <option value="2">*</option>
    <option value="3">%</option>
    <option value="4">^</option>
</select>
<input type="number" name="n2">
<input type="submit" value="Calcular">
</form>
<h1>
    <?php 
        if(isset($_POST['n1']) && !empty($_POST['n1'])){
            echo "o resultado é :".$conta;
        }
    ?>
</h1>