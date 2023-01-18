<?php
$errorMessages = [];

function error($message)
{
    global $errorMessages;
    array_push($errorMessages, $message);
}
