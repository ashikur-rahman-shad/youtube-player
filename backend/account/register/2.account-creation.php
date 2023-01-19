<?php
if (isset($_POST["reg"]) && count($errorMessages) == 0) {

    $sql = "INSERT INTO users(name, email, pass)
    VALUE('" . $name . "','" . $email . "','" . $password . "');";

    sql($sql);

    $user_id = get_user_id($email);
}
//