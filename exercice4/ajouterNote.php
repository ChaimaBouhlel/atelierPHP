<?php
session_start();
$nouvelle_note=['titre' => $_POST['titre'],'desc' =>  $_POST['description']];
$id = uniqid();
$_SESSION[$id]=$nouvelle_note;

var_dump($_SESSION);
header('location:formNotes.php');
?>