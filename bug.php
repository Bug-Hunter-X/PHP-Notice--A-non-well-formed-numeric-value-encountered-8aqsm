function calculate_total($prices) {
  $total = 0;
  foreach ($prices as $price) {
    $total += $price;
  }
  return $total;
}

$prices = [10, 20, "30a"]; //Incorrect price
$total = calculate_total($prices);
echo "Total: " . $total;