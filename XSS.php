<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Cross Site Scripting</h1>
    <?php
    echo htmlspecialchars('<script></script>');
    ?>
  </body>
</html>
