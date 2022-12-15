<?php
session_start();

if($_SESSION['login'] !== true){
    header('location: index.php');
    exit;
}
else{
    echo " benveuto nella tua area riservata! La tua password randomica e' :" . $_SESSION['password'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area riservata</title>
</head>
<body>
    <div>
        <p>Vuoi sloggare?</p>
        <a href="logout.php"> <button>Esci</button> </a>
    </div>
</body>
</html>