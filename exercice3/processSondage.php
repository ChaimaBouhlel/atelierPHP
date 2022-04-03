<?php
session_start();
$valeurNote = $_POST['note'];

$valeurNote_est_remplie = isset($valeurNote);
$cookie_existe = isset($_COOKIE['note']);

if (!$cookie_existe && $valeurNote_est_remplie) {
    setcookie('note', $valeurNote, time()+60*2,'/');
    $_SESSION['message'] = 'Votre vote a été enregistré!';
    header('location:sondage.php');
}
if ($cookie_existe){
    $_SESSION['error_message'] = 'Vous avez déja voté pour '.$_COOKIE['note'];
    header('location:sondage.php');
}
