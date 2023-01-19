<?php
function printError()
{
    global $errorMessages;

    for ($i = 0; $i < count($errorMessages); $i++) {
        echo $errorMessages[$i] . "<br>";
    }
}
