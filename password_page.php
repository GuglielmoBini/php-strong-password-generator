<?php
session_start();

$password = $_SESSION['password'];

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Generated Password</title>
</head>

<body>
    <div class="container my-5">
        <div class="text-center border p-5">
            <h1 class="text-success mb-5">La tua Password é: <?php echo $password ?></h1>
            <a href="index.php" class='btn btn-warning'>TORNA INDIETRO</a>
        </div>
    </div>
</body>

</html>