<?php
function prod($x, $y){
  $z = $x * $y;
  return $z;
}

echo "<table><tr><td></td>";
for($k = 1; $k < 101; $k++){
  echo ("<td>$k</td>");
}
echo ("</tr>");
for($k = 1; $k < 101; $k++){
  echo "<td>$k</td>";
  for($j = 1; $j < 101; $j++){
    echo "<td>" . prod($k, $j) . "</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>
