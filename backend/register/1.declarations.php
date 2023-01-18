<?php
if(isset($_SESSION["email"])) header('Location: ./');

$errorMessages = [];

function error($message)
{
    global $errorMessages;
    array_push($errorMessages, $message);
}
