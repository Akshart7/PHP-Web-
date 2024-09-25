<?php
function compareNumbers($num1, $num2) {
  if ($num1 > $num2) {
    return "$num1 is bigger than $num2";
  } elseif ($num1 < $num2) {
    return "$num2 is bigger than $num1";
  } else {
    return "$num1 and $num2 are equal";
  }
}
echo compareNumbers(5, 10); 
?>