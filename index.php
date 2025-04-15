<?php 

include_once 'functions.php'; // Include the functions file to use the generatePassword function

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-5">Generator Password</h1>
    <hr>
    <div class="container  mt-5 mb-5 d-flex justify-content-center align-items-center flex-column">
    <form class="d-flex flex-column w-50" action="result.php"   method="GET">
        <label for="length">Length for password: </label>
        <input type="number" id="length" name="length" min="5" max="20" value="12">
        <div class="mt-3 d-flex gap-3">
        <label for="characters">Consenti ripetizioni di uno o piu caratteri:</label>
        <input type="checkbox" id="characters" name="characters" value="yes" >
        </div>
        <div class="mt-3 d-flex flex-column">
            <div class="mt-3 d-flex gap-3">
            <label for="numbers">Include numeri:</label>
            <input type="checkbox" id="numbers" name="numbers" value="yes" >
            </div>
            <div class="mt-3 d-flex gap-3">
            <label for="letters">Include lettere:</label>
            <input type="checkbox" id="letters" name="letters" value="yes" >
            </div>
            <div class="mt-3 d-flex gap-3">
            <label for="special">Include caratteri speciali:</label>
            <input type="checkbox" id="special" name="special" value="yes" >
            </div>
        </div>
        <div class="mt-3 ">
            <button  type="submit">Generate</button>
        </div>

    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>