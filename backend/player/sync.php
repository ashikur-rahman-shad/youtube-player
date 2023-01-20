<?php
if (isset($_GET['id'])) {
    require '../database/db-connect.php';
    $new_state = sql("SELECT * FROM players WHERE streamkey='" . $_GET['id'] . "'");
    while ($r = mysqli_fetch_assoc($new_state)) {
        $rows[] = $r;
    }
    $a = substr(trim(json_encode($rows)),1,-1);

    echo $a;
}