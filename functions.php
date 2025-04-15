<?php 

// create a password generator function

function generatePassword($length = 12) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+[]{}|;:,.<>?'; // Include special characters
    $charactersLength = strlen($characters); // Get the length of the characters string
    $randomString = ''; // Initialize an empty string to hold the generated password

    // Loop to generate a password of the specified length
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)]; // Generate a random character from the characters string
    }
    return $randomString;
}



?>