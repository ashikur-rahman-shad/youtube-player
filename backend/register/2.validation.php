<?php
if (
    isset($_POST["reg"]) &&
    isset($_POST["email"]) &&
    isset($_POST["name"]) &&
    isset($_POST["password"])
) {

    $name = trim($_POST["name"]);
    $email = preg_replace("/\s+/", "", $_POST["email"]);
    $password = $_POST["password"];

    if (strlen($name) < 2) error("Name too small");
    if (strlen($name) > 25) error("Name too big!!");

    if (strlen($password) < 8) error("Password too short");
    if (strlen($password) > 25) error("Password too long");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) error("Invalid email");
    $email_check = fetch("SELECT * FROM users WHERE email = '" . $email . "';");
    if (mysqli_num_rows($email_check) > 0) error("Email already taken. Try something else");
}

//email validation idea taken from: https://www.w3schools.com/php/php_form_url_email.asp
