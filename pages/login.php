<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/1.general.css">
  <link rel="stylesheet" href="styles/2.player.css">
</head>

<body>
  <div class="top-bar">
    <span class="brand-logo"><a href="./">YouTube Player</a></span>
  </div>
  <br>
  <form load="body/login-form.html" method="post" action=""></form>
  <div class="error-messages">
    <?php printError(); ?>
  </div>
  <script src="scripts/general/1.fetch.js"></script>

</body>

</html>