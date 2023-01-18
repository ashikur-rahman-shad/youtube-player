<?php
function session()
{
    if (isset($_SESSION['email'])) {
        echo $_SESSION['email'];
        echo '<form method="post" action="">
    <input class="small-btn" type="submit" name="logout" value="Log out">
    </form>';
        if (isset($_POST['logout'])) {
            session_unset();
            session_destroy();
            header('Location: ./');
        }
    } else {
        echo '<a href="login.php">Log in</a>';
    }
}
