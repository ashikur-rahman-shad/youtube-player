<script>
    var streamkey =
        <?php
        if (isset($_GET['id'])) echo  $_GET['id'];
        else if (isset($_SESSION['streamkey'])) echo  $_SESSION['streamkey'];
        else echo ' streamkey = "none";';
        ?>;
</script>