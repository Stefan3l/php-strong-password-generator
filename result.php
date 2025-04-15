<?php 

include 'functions.php'; // Include the functions file to use the generatePassword function
include 'functionForm.php'; // Include the form validation function



// Get parameters from the GET request
$length = isset($_GET['length']) ? (int)$_GET['length'] : 12;
$useNumbers = isset($_GET['numbers']) && $_GET['numbers'] === 'yes';
$useLetters = isset($_GET['letters']) && $_GET['letters'] === 'yes';
$useSpecialChars = isset($_GET['special']) && $_GET['special'] === 'yes';
$allowRepetition = isset($_GET['characters']) && $_GET['characters'] === 'yes';

// Generate the password using the function
$password = generatePassword($length, $useNumbers, $useLetters, $useSpecialChars, $allowRepetition); // Call the function to generate the password

// Check for errors in the input parameters
if (empty($password)) {
    $error = "Seleziona almeno un tipo di carattere per generare la password.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-5">This is your Password</h1>
    <hr>
    <div class="card-body d-flex justify-content-center align-items-center flex-column mt-5 mb-5 gap-5">
       <h2 class="text-center text-danger">
           <?php 
           if (isset($error)) {
               echo htmlspecialchars($error);
           } else {
               echo htmlspecialchars($password);
           }
           ?>
       </h2>
       <a href="index.php" class="btn btn-primary">Generate Another Password</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>