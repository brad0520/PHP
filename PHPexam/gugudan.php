<?php
$dan = 2;

echo "<h1>구구단 {$dan}단</h1>";

echo "<section>";

for ( $i = 1; $i <= 9; $i++ ) {
  $rs = $dan * $i;

  echo "<div>{$dan} * {$i} = {$rs}</div>";
}

echo "</section>";
?>
