<?php 
function validateForm() {
    $useNumbers = isset($_GET['numbers']) && $_GET['numbers'] === 'yes';
    $useLetters = isset($_GET['letters']) && $_GET['letters'] === 'yes';
    $useSpecialChars = isset($_GET['special']) && $_GET['special'] === 'yes';
    $length = isset($_GET['length']) ? (int)$_GET['length'] : 12;
    $allowRepetition = isset($_GET['characters']) && $_GET['characters'] === 'yes';

    if ( !$useNumbers && !$useLetters && !$useSpecialChars) {
        return false; // No character types selected
    }

    return true; // At least one character type is selected
}

?>