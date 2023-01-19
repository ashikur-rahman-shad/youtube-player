<?php
if (
    isset($_POST["reg"]) &&
    isset($_POST["email"]) &&
    isset($_POST["name"]) &&
    isset($_POST["password"]) &&
    isset($_POST["password2"])
) {

    $name = trim($_POST["name"]);
    $email = preg_replace("/\s+/", "", $_POST["email"]);
    $password = $_POST["password"];
    $password2 = $_POST["password2"];


    if (strlen($name) < 2) error("Name too small");
    if (strlen($name) > 25) error("Name too big!!");

    if ($password != $password2) error("Two passwords don't match");
    else {
        if (strlen($password) < 8) error("Password too short");
        if (strlen($password) > 25) error("Password too long");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) error("Invalid email");
    else {
        $email_check = sql("SELECT * FROM users WHERE email = '" . $email . "';");
        if (mysqli_num_rows($email_check) > 0) error("Email already taken");
    }
}

//email validation credit: https://www.w3schools.com/php/php_form_url_email.asp
