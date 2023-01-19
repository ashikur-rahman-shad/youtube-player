<?php
function get_user_id($email){
    $user_id = sql("SELECT id FROM `users` WHERE email= '" . $email . "';");

    if (mysqli_num_rows($user_id) > 0) {
        $row = mysqli_fetch_assoc($user_id);
        return $row["id"];
    }
}

//