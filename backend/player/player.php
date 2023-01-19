<?php
function session()
{
    if (isset($_SESSION['email'])) {
        echo $_SESSION['email'];
        echo '<a href="?logout=1"> logout</a>';
        if (isset($_GET['logout'])) {
            session_unset();
            session_destroy();
            header('Location: ./');
        }
    } else {
        echo '<a href="login.php">Log in</a>';
    }
}
