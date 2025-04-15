<?php 

// create a password generator function

function generatePassword($length = 12, $useNumbers = true, $useLetters = true, $useSpecialChars = true, $allowRepetition = true) {
    $numbers = '0123456789';
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $special = '!@#$%^&*()_+[]{}|;:,.<>?';

    // Initialize the character set based on user preferences
    $characterSet = '';
    if ($useNumbers) $characterSet .= $numbers;
    if ($useLetters) $characterSet .= $letters;
    if ($useSpecialChars) $characterSet .= $special;

    // If no character set is selected, return an empty string
    if (empty($characterSet)) {
        return '';
    }

    $characterSetLength = strlen($characterSet); // Get the length of the character set
    $password = '';

    if ($allowRepetition) {
        // Generate password with repetition allowed
        for ($i = 0; $i < $length; $i++) {
            $password .= $characterSet[rand(0, $characterSetLength - 1)];
        }
    } else {
        // Generate password without repetition
        if ($length > $characterSetLength) {
            return 'Password length exceeds character set size.';
        }
        $passwordArray = str_split($characterSet); // Convert character set to an array
        shuffle($passwordArray); // Shuffle the array to randomize the order
        $password = implode('', array_slice($passwordArray, 0, $length)); // Take the first 'length' characters
    }
    return $password; // Return the generated password

}
?>