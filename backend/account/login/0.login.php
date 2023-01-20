<?php

if (
    isset($_POST["login"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"])
) {

    $email = preg_replace("/\s+/", "", $_POST["email"]);
    $password = $_POST["password"];

    $email_check = sql("SELECT id FROM users WHERE email = '" . $email . "'and pass = '" . $password . "';");

    if (mysqli_num_rows($email_check)) {
        $row = mysqli_fetch_assoc($email_check); 
        $id = $row["id"] ;

        

        $row = mysqli_fetch_assoc(sql("SELECT streamkey FROM players WHERE owner=".$id)); 
        $_SESSION["streamkey"] = $row["streamkey"] ;
        $_SESSION["email"] = $email;
        
        header('Location: ./');
    } else error("Incorrect login info. Try again");
}
