<?php

const PI = 3.14159; 

function findRadius($circumference) {
  $radius = $circumference / (2 * PI);
  return $radius;
}

$circumference = 77777;
$radius = findRadius($circumference);

echo "The radius of the circle is: " . $radius;
?>