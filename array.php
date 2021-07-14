<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
      $arr = array('egoing', 'leezhe', 'wooseob', 'taeho');
      echo $arr[1].'<br>';
      var_dump($arr);
      echo '<br>';
      var_dump(count($arr));
      echo '<br>';
      array_push($arr, 'graphittie');
      shuffle($arr);
      var_dump($arr);
    ?>
  </body>
</html>
