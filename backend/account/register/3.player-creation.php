<?php
if (isset($_POST["reg"]) && count($errorMessages) == 0) {

    $stream_key = $user_id . date('-Y-m-d-H-i-s');

    $sql = "INSERT INTO `players` (`streamkey`, `owner`, `incident`, `vid_id`, `duration`, `state`)VALUES 
    ('" . $stream_key . "', '" . $user_id . "', '" . date('Y-m-d H:i:s') . "', 'PEwJ9VIlNgM', '0', '1')";

    sql($sql);
}
//