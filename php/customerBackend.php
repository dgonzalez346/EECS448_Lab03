<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$prices = array(1,5,50);
$quantities = array($_POST["product1"], $_POST["product2"], $_POST["product3"]);
$ship_prices = array(0,50,5);
$ship_types = array(
  0 => "7-day",
  1 => "Overnight",
  2 => "3-day",
);
$shipping_num = $_POST["shipping"];
$passw = $_POST["passw"];
$shipping = $ship_types[$shipping_num];
$total = 0;
for($i = 0; $i < 3; $i++){
  $total += ($prices[$i] * $quantities[$i]);
}
$total += $ship_prices[$shipping_num];
echo ("<h2> Thank you for your Purchase!</h2><p>Your total is: $$total. Your itemized receipt is below.</p>");
echo ("<p>Also as a fun practical joke here's your password: $passw </p>");
$total = 0;
echo ("<table><tr><th> </th> <th> Quantity </th> <th>Cost per Item </th> <th> Sub Total </th> <tr>");
for($k = 0; $k < 3; $k++){
  echo ("<tr><td><b>Item " . $k + 1 . "</b></td> <td> $quantities[$k] </td> <td> $prices[$k] </td>");
  $total += $quantities[$k] * $prices[$k];
  echo("<td> $total </td></tr>");
}
echo ("</table>");
?>
