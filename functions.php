<?php

$password_length =(empty($_GET['password-length']) ? null : (int)$_GET['password-length']) ;
$password_number =  (empty($_GET['pass-number']) ? null : 'true') ;
$password_special =  (empty($_GET['pass-special']) ? null : 'true') ;

function generatorPassword( $length , $only_number, $only_special) {

    if($only_number == true ){
        $alphabet = '1234567890';
    }
    elseif($only_special == true){
        $alphabet = '!"#$%&*+-./<=>?@[\]^_`{|}~';
    }
    else{
         $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!"#$%&*+-./<=>?@[\]^_`{|}~';
    }
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $length; $i++) {
        $single_character = rand(0, $alphaLength);
        $pass[] = $alphabet[$single_character];
    }
    return implode($pass); 
}
if(generatorPassword($password_length, $password_number, $password_special) > 5){
    $new_password = generatorPassword($password_length, $password_number, $password_special);
    session_start();

    $_SESSION['login'] = true;
    $_SESSION['password'] = $new_password;

    header('location: private.php');
};

?>

