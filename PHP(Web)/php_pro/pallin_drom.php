<?php
function isPalindrome($input) {
    $input = (string) $input;
    $reversed = strrev($input);
    if ($input === $reversed) {
        return array('is_palindrome' => true, 'value' => $input);
    } else {
        return array('is_palindrome' => false, 'value' => $input);
    }
}

$string = "DAD";
$result = isPalindrome($string);
echo "Is Palindrome: " . ($result['is_palindrome'] ? 'Yes' : 'No') . "\n";
echo "Value: " . $result['value'] . "\n";

$x = 121;
$result = isPalindrome($x);
echo "Is Palindrome: " . ($result['is_palindrome'] ? 'Yes' : 'No') . "\n";
echo "Value: " . $result['value'] . "\n";
?>