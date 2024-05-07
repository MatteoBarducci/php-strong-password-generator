<?php

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
    </main>
    
</body>
</html>
