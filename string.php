<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelCount = 0;
    $length = strlen($string);

    for ($i = 0; $i < $length; $i++) {
        $character = strtolower($string[$i]);

        if (in_array($character, $vowels)) {
            $vowelCount++;
        }

    }

    $reversedString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
