<?php
if (isset($_POST["reg"]) && count($errorMessages) == 0) {

    $_SESSION["email"] = $email;
    $_SESSION["streamkey"] = $stream_key;
    $_SESSION["id"] = $user_id;

    header('Location: ./');
}
//