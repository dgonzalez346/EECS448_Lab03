<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Inside myfirstprogram.php
function prod($x, $y) {
$z = $x * $y;
return $z;
}
echo "<table><td></td><tr><td> </td>";
for($k = 1; $k < 101; $k++){
  echo "<td>",$k,"</td>";
}
echo "</tr>";
for($i = 1; $i < 101; $i++){
  echo "<td>",$i,"</td>";
  for($j = 1; $j < 101; $j++){
    echo "<td>",prod($i, $j),"</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>
