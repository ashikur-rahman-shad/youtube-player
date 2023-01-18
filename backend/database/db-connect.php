<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "youtube_player";


function insert($sql)
{
  global $db_host, $db_user, $db_pass, $db_name;
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  mysqli_query($conn, $sql);
  mysqli_close($conn);
}


function fetch($sql)
{
  global $db_host, $db_user, $db_pass, $db_name;
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  return mysqli_query($conn, $sql);
  mysqli_close($conn);

}

/* fetch example
$result = fetch("");
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"] . " - Name: ";
  }
  mysqli_close($conn);
}
*/
