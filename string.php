<?php
$strings = ["Hello", "World", "PHP", "Programming"];
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array(strtolower($string[$i]),$vowels)) {
            $count++;
        }
    }
    return $count;
}
foreach ($strings as $string) {
 $vowelCount = countVowels($string);
 $reversedString = strrev($string);
 echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
 echo"<br>";
}
?>