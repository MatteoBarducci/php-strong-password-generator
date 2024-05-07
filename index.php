<?php

$lcCharacters = range('a', 'z');
$ucCharacters = range('A', 'Z');
$numbers = range(0, 9);
$specialCharatcters = range('-','!');

$completePasswordCharacters = [...$lcCharacters, ...$ucCharacters, ...$numbers, ...$specialCharatcters];
$passwordLength = (isset($_GET['length'])) ? intval($_GET['length']) : '';
$password = '';


if(!empty($passwordLength)){
    $password = generatePassword($passwordLength, $completePasswordCharacters);

    session_start();
    $_SESSION['password'] = $password;

    header('Location: ./success.php');
};

function generatePassword($length, $characters){
    $password = '';

    for($i = 0; $i < $length; $i++){
        $randomIndex = rand(0, count($characters) - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /LINK BOOTSTRAP -->
    <title>Password Generator</title>
</head>
<body>
    <header>
        <h1 class="text-center">Password Generator</h1>
    </header>

    <main>
        <div class="container">
            <form action="" method="GET">
                <div class="mb-3">
                    <label for="length" class="form-label">Password Length</label>
                    <input type="number" class="form-control" id="length" name="length">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="container mt-3">
            <p> <?php echo empty($password) ? 'Scrivi la lunghezza della password' : 'La tua passowrd è: ' . $password ?> </p>
        </div>
    </main>
    
</body>
</html>
