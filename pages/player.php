<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/1.general.css">
  <link rel="stylesheet" href="styles/2.player.css">
</head>


<body translate="no">

  <div id="newState" style="display: none;">
    {"incident":"2023-01-19 18:58:31","vid_id":"PEwJ9VIlNgM","duration":"0","state":"1"}
  </div>

  <div class="top-bar">
    <span class="brand-logo">Youtube Player</span>

    <span style="float: center;">
      <input name="url" type="text" placeholder="Enter link">
      <button onclick="changeURL()"> Load video</button>

      <span style="float:right;"> <?php session(); ?> </span>
    </span>

  </div>

  <div class="youtube-container">
    <iframe id="video" src="https://www.youtube.com/embed/PEwJ9VIlNgM?autoplay=1&mute=1&loop=1&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1" title="Video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="control-buttons" load="body/control-buttons.html"></div>

  <div id="scripts">
    <script src="scripts/general/1.fetch.js"></script>
    <script src="https://www.youtube.com/player_api"></script>
    <script src="scripts/ytPlayer/0.loadScripts.js"></script>
    <script src="scripts/ytPlayer/1.globalVariables.js"></script>
    <script src="scripts/ytPlayer/2.YtPlayer.js"></script>
    <script src="scripts/ytPlayer/3.update.js"></script>
    <script src="scripts/ytPlayer/4.videoURL.js"></script>
    <script src="scripts/ytPlayer/5.control.js"></script>
    <script src="scripts/ytPlayer/6.checkRepeat.js"></script>
    <script src="scripts/ytPlayer/7.copyLink.js"></script>
  </div>

</body>

</html>