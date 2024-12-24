function calculate_total($prices) {
  $total = 0;
  foreach ($prices as $price) {
    if (is_numeric($price)) {
      $total += floatval($price); //Convert to float to handle potential decimals
    } else {
      //Handle non-numeric values appropriately, e.g., log an error, use a default value, or throw an exception.
      error_log('Warning: Non-numeric value encountered in price array.');
    }
  }
  return $total;
}

$prices = [10, 20, "30a"];
$total = calculate_total($prices);
echo "Total: " . $total; 