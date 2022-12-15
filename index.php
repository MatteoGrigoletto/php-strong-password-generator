<?php

$password_length =(empty($_GET['password-length']) ? null : (int)$_GET['password-length']) ;

function generatorPassword( $length) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!"#$%&*+-./<=>?@[\]^_`{|}~';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $length; $i++) {
        $single_character = rand(0, $alphaLength);
        $pass[] = $alphabet[$single_character];
    }
    return implode($pass); 
}

$random_password = generatorPassword($password_length);

var_dump($random_password);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- cdn  -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <section class="bg-primary d-flex justify-content-center align-items-center container-fluid" style="height: 100vh;">
        <div class="container-md bg-light py-5">
        <form action="" method="get">
            <label for="password-length">Inserisci numero caratteri password: </label>
            <input name="password-length" type="text">
            <button type="submit"> Crea</button>
        </form>
        </div>
    </section>
  
</body>
</html>