<?php
function incrementValue($x) {
  $x = $x + 1;
  return $x;
}

$value = 5;
echo "Original value: $value\n";
$newValue = incrementValue($value);
echo "New value: $newValue\n";
echo "Original value after function call: $value\n";

function incrementReference(&$x) {
  $x = $x + 1;
}

$reference = 5;
echo "Original reference: $reference\n";
incrementReference($reference);
echo "New reference: $reference\n";
?>