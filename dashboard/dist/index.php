<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Catalogador</title>
    <link rel="shortcut icon" href="../../img/logo.png">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/dist.json", {onProgress: UnityProgress});
    </script>
  </head>
  
  <body>
    <div class="webgl-content " style="position:absolute;">
    <div id="gameContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <!-- <div class="webgl-logo"></div> -->
        <!-- <div class="fullscreen" onclick="gameInstance.SetFullscreen(0)"></div> -->
        <div class="title">Dashboard</div>
      </div>
    </div>
  </body>
</html>
