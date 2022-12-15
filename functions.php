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
if(generatorPassword($password_length) > 5){
    $new_password = generatorPassword($password_length);
    session_start();

    $_SESSION['login'] = true;
    $_SESSION['password'] = $new_password;

    header('location: private.php');
};

?>

