
<?php

try {
    $dsn = "mysql:dbname=projeto_tags;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "erro: " . $e->getMessage();
    exit;
}
$sql = "SELECT caracteristicas FROM usuarios";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll();
    $carac = array();
    foreach ($lista as $usuario) {
        $palavras = explode(",", $usuario['caracteristicas']);
        foreach ($palavras as $palavra) {
            $palavra = trim($palavra);
            if (isset($carac[$palavra])) {
                $carac[$palavra]++;
            } else {
                $carac[$palavra] = 1;
            }
        }
    };
    $palavras = array_keys($carac);
    $contagem = array_values($carac);
    $tamanhos = array(
        11,
        15,
        20,
        30
    );
    $maior = max($contagem);
    for ($x = 0; $x < count($palavras); $x++) {
        $n = $contagem[$x] / $maior;
        $h = ceil($n * count($tamanhos));
        echo "<p style = 'font-size: " . $tamanhos[$h - 1] . "px;'  p>" . utf8_encode($palavras[$x]) . "(" . $contagem[$x] . ")</p>";
    }
}
?>