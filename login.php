<?php require 'functions.php';

session_start();
if(verifyLogin()) {
    header('Location: account.php');
}

?>