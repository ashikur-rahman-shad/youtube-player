<?php
if (isset($_GET['streamkey'])) {
    require '../database/db-connect.php';
    $sql = "UPDATE players SET ";

    if (isset($_GET['vidid'])) $sql = $sql . " vid_id = '" . $_GET['vidid'] . "',";
    if (isset($_GET['duration'])) $sql = $sql . " duration = " . $_GET['duration'] . ",";
    if (isset($_GET['state'])) $sql = $sql . " state = " . $_GET['state'] . ",";

    if (isset($_GET['vidid']) || isset($_GET['duration']) || isset($_GET['state'])) 
    {
        $sql = $sql . " incident = CURRENT_TIMESTAMP";
        $sql = $sql . " WHERE streamkey = '".$_GET['streamkey']."'";
        sql($sql);
    }
}
