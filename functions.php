<?php

function verifyLogin($username, $password) : bool {
    session_start();
    if(loginExists($username)) {
        if(correctPassword($username, $password)) {
            return true;
        }
    }
    return false;
}

function loginFailMessage() : string {
    session_start();
    if(array_key_exists('badname' , $_SESSION)) {
        session_destroy();
        return 'User not in database. Please try again';
    }
    if(array_key_exists('badpass', $_SESSION)) {
        session_destroy();
        return 'Wrong password. Please try again.';
    }
    return '';
}


function loginExists($username) : bool {
    if($username == 'jcd') {
        return true;
    }
    return false;
}

function correctPassword($username ,$password) {
    $dbpassword = password_hash('bionicman', PASSWORD_DEFAULT);
    if(password_verify($password, $dbpassword)) {
        return true;
    }
    return false;
}