<?php
session_start();

if($_SESSION['login'] !== true){
    header('location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area riservata</title>
</head>
<body class="bg-success text-center bold">
    <div class="container-lg bg-light my-5 py-5">
        <div class="py-5 fs-1">
            <h3 class="text-center">
                Benveuto nella tua area riservata! La tua password randomica e' :
            </h3>
            <h2 class="py-5 text-warning">
            <?php echo $_SESSION['password'] ?>
            </h2>
        </div>
        <p class="py-3 fs-2">Vuoi sloggare?</p>
        <a href="logout.php"> <button class="px-3">Esci</button> </a>
    </div>
</body>
</html>