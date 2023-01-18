<?php
if (isset($_POST["reg"]) && count($errorMessages) == 0) {
    $sql = "INSERT INTO users(name, email, pass)VALUE('" . $name . "','" . $email . "','" . $password . "');";
    insert($sql);
    $_SESSION["email"] = $email;
    if(isset($_SESSION["email"])) header('Location: ./');
}
