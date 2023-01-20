<script>
    <?php
    if (isset($_GET['id'])) echo "streamkey = " . $_GET['id'] . ";";
    else if (isset($_SESSION['streamkey'])) echo "streamkey = " . $_SESSION['streamkey'] . ";";
    else echo 'var streamkey = "none";';
    ?>
</script>