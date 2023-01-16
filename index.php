<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/general.css">
</head>


<body translate="no">


  <div class="control-buttons" style="background-color: #000;">
    <input name="url" type="text" placeholder="Enter link">
    <button onclick="changeURL()"> Load video</button>
  </div>

  <div class="youtube-container">
    <iframe id="video"
      src="https://www.youtube.com/embed/PEwJ9VIlNgM?autoplay=1&mute=1&loop=1&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1"
      title="Video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </div>

  <div class="control-buttons" load="body/control-buttons.html"></div>

  <div id="scripts">
    <script src="https://www.youtube.com/player_api"></script>
    <script src="scripts/ytPlayer/0.loadScripts.js"></script>
    <script src="scripts/ytPlayer/1.globalVariables.js"></script>
    <script src="scripts/ytPlayer/2.YtPlayer.js"></script>
    <script src="scripts/ytPlayer/3.videoURL.js"></script>
    <script src="scripts/ytPlayer/4.seek.js"></script>
    <script src="scripts/ytPlayer/5.checkRepeat.js"></script>
    <script src="scripts/general/1.fetch.js"></script>
  </div>

</body>

</html>