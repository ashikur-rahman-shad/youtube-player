<?php
if (isset($_POST["reg"]) && count($errorMessages) == 0) {

    $stream_key = $user_id . date('YmdHis');

    $sql = "INSERT INTO `players` (`streamkey`, `owner`)VALUES 
    ('" . $stream_key . "', '" . $user_id . "')";

    sql($sql);
}
//