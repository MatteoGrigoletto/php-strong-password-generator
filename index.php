<?php

require_once __DIR__ .  "/functions.php";

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
<body class="bg-primary">
    <section class="bg-primary d-flex flex-wrap justify-content-center align-items-center container-fluid py-5">
        <div class="text-center text-light py-5" style="width: 100%;">
            <h1>Generatore password randomiche</h1>
        </div>
        <div class="bg-light p-5">
            <form action="functions.php" method="get">
                <div class="mb-3">
                    <label for="password-length" class="form-label">Inserisci numero caratteri password:</label>
                    <input type="password" name="password-length" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-check">
                    <input name="pass-number" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Password con solo numeri</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
  
</body>
</html>