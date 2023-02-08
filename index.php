<?php
// numero per lumghezza password
$password_length = $_GET['number'] ?? '';
// includes
include './includes/functions.php'
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Strong Password generator</title>
</head>

<body>
    <div class='container text-center mt-5'>
        <h1 class='my-4'>Strong Password Generator</h1>
        <h3 class='my-3'>Genera una password sicura</h3>
        <p class='text-success'>La tua password è : <span class='fs-3'><?php echo $generated_password ?></span></p>
        <!-- form -->
        <form action="" method='GET' class='d-flex flex-column align-items-center'>
            <div class="my-4 w-25 ">
                <label for="passwordlength" class="form-label">Lunghezza password:</label>
                <input type="number" class="form-control" id="passwordlength" name='number' min='8' max='16' placeholder='minimo 8 caratteri...'>
            </div>
            <div class='my-4'>
                <button type='submit' class='btn btn-success'>INVIA</button>
                <a href="index.php" class='btn btn-secondary'>Annulla</a>
            </div>
        </form>
    </div>
</body>

</html>