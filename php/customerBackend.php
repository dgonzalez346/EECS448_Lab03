<style><?php include 'customerstyle.css';?></style>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//here we get the user input
$prices = array(1,5,50);
$quantities = array($_POST["product1"], $_POST["product2"], $_POST["product3"]);
$ship_prices = array(0,50,5);
$ship_types = array(
  0 => "7-day",
  1 => "Overnight",
  2 => "3-day",
);
$items = array(
  0 => "Lil Bub Coaster",
  1 => "Lil Bub Mug",
  2 => "Lil Bub French Press",
);
$shipping_num = $_POST["shipping"];
$passw = $_POST["passw"];
$shipping = $ship_types[$shipping_num];
$total = 0;


for($i = 0; $i < 3; $i++){
  $total += ($prices[$i] * $quantities[$i]);
}
$total += $ship_prices[$shipping_num];
echo ("<h2> Thank you for your Purchase!</h2><p>Your total is: $$total. Your itemized receipt is below.");
echo ("<br>Also as a fun practical joke, here's your password: $passw </p>");
$total = 0;
echo ("<table><tr><th> </th> <th> Quantity </th> <th>Cost per Item </th> <th> Row Total </th> <tr>");
for($k = 0; $k < 3; $k++){
  echo ("<tr><td style='background-color:Lime';><b>$items[$k] </b></td> <td> $quantities[$k] </td> <td> $$prices[$k] </td>");
  $temp = $quantities[$k] * $prices[$k];
  $total += $temp;
  echo("<td> $$temp </td></tr>");
}
$temp = $ship_prices[$shipping_num];
$total += $temp;
echo ("<tr><td style='background-color:Lime';><b>Shipping</b></td><td colspan='2'>$shipping</td><td>$$temp</td></tr>");
echo ("<tr><td colspan = '3' style='background-color:Lime';><b>Total Cost</b></td><td style='background-color:Lime';>$$total</td>");
echo ("</table>");
?>
