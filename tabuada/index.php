<table border="2">
  <tr>
    <th>0</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
  </tr>
  <tr>
    <?php
    for ($n = 0; $n <= 10; $n++) {
      echo "<tr>";
      for ($i = 0; $i <= 10; $i++) {
        $conta = $n * $i;
        echo "<td>" . $conta . "</td>";
      }
      echo "</tr>";
    }
    ?>
  </tr>
</table>